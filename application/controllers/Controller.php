<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Controller extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Model');
		}

		#LOGIN=================================================================
		public function login(){
			if ($this->session->userdata('id')){
	    	  redirect('Controller');
	    	}
			$this->load->view('sub/head');
			$this->load->view('login');
			$this->load->view('sub/foot');
		}

		public function proses_login(){
			if(isset($_POST['login'])){
				$user  = $this->input->post('user',true);
				$pas   = $this->input->post('pass',true);
				$pass  = md5($pas);
				$cek   = $this->Model->login($user,$pass);
				$hasil = count(array($cek));
				if($hasil > 0){
					$in   = $this->db->get_where('muser',array('user'=>$user,'pass'=>$pass))->row();
					$data = array('udhmasuk' => true,
								  'id'       => $in->id,
								  'name'     => $in->name);
					$this->session->set_userdata($data);
					redirect('Controller');
				}else{
					redirect('Controller/login');
				}
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('Controller');
		}

		#MCUSTOMER==============================================================
		public function index(){
			if (!$this->session->userdata('id')){
	    	  redirect('Controller/login');
	    	}
			$data['data'] = $this->Model->get_join();
			$this->load->view('sub/head');
			$this->load->view('customer/index',$data);
			$this->load->view('sub/foot');
		}

		public function tambah(){
			$data['type'] = $this->Model->get('mtype');
			$this->load->view('sub/head');
			$this->load->view('customer/tambah',$data);
			$this->load->view('sub/foot');
		}

		public function proses_tambah(){
			$id = $this->session->userdata('id');
			$datetime = date('Y-m-d H:i:s');
			$data = array(
				'name' 			=> $this->input->post('name'),
				'type_customer' => $this->input->post('type_customer'),
				'address' 	    => $this->input->post('address'),
				'email' 	    => $this->input->post('email'),
				'no_tlp' 	    => $this->input->post('no_tlp'),
				'record_by'     => $id,
				'record_date'   => $datetime
			);
			$this->Model->tambah('mcustomer',$data);
			redirect('Controller');
		}

		public function proses_tambah_modal(){
			$id = $this->session->userdata('id');
			$datetime = date('Y-m-d H:i:s');
			$data = array(
				'name' 			=> $this->input->post('name'),
				'record_by'     => $id,
				'record_date'   => $datetime
			);
			$this->Model->tambah('mtype',$data);
			redirect('Controller/tambah');
		}

		public function edit($id){
			$where = array('id' => $id);
			$data['data'] = $this->Model->get_edit($where,'mcustomer');
			$data['type'] = $this->Model->get('mtype');
			$this->load->view('sub/head');
			$this->load->view('customer/form_edit',$data);
			$this->load->view('sub/foot');
		}

		public function proses_edit(){
			$id = $this->session->userdata('id');
			$datetime = date('Y-m-d H:i:s');
			$data = array(
				'name' 			=> $this->input->post('name'),
				'type_customer' => $this->input->post('type_customer'),
				'address' 	    => $this->input->post('address'),
				'email' 	    => $this->input->post('email'),
				'no_tlp' 	    => $this->input->post('no_tlp'),
				'update_by'     => $id,
				'update_date'   => $datetime
			);
			$where = array(
				'id' => $this->input->post('id')
			);
			$this->Model->edit($where,$data,'mcustomer');
			redirect('Controller');
		}

		public function hapus($id){
			$where = array ('id'=>$id);
			$data  = $this->Model->hapus($where,'mcustomer');
			redirect('Controller');
		}

		#MTYPE==================================================================
		public function type(){
			$data['type'] = $this->Model->get('mtype');
			$this->load->view('sub/head');
			$this->load->view('type/index',$data);
			$this->load->view('sub/foot');
		}

		public function tambah_type(){
			$this->load->view('sub/head');
			$this->load->view('type/tambah');
			$this->load->view('sub/foot');
		}

		public function proses_tambah_type(){
			$id = $this->session->userdata('id');
			$datetime = date('Y-m-d H:i:s');
			$data = array(
				'name' 			=> $this->input->post('name'),
				'record_by'     => $id,
				'record_date'   => $datetime
			);
			$this->Model->tambah('mtype',$data);
			redirect('Controller/type');
		}

		public function edit_type($id){
			$where = array('id' => $id);
			$data['data'] = $this->Model->get_edit($where,'mtype');
			$this->load->view('sub/head');
			$this->load->view('type/form_edit',$data);
			$this->load->view('sub/foot');
		}

		public function proses_edit_type(){
			$id = $this->session->userdata('id');
			$datetime = date('Y-m-d H:i:s');
			$data = array(
				'name' 			=> $this->input->post('name'),
				'update_by'     => $id,
				'update_date'   => $datetime
			);
			$where = array(
				'id' => $this->input->post('id')
			);
			$this->Model->edit($where,$data,'mtype');
			redirect('Controller/type');
		}

		public function hapus_type($id){
			$where = array('id'=>$id);
			$data  = $this->Model->hapus($where,'mtype');
			redirect('Controller/type');
		}
	
	}
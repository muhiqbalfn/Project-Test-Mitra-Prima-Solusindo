<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model extends CI_Model {

		public function login($user,$pass){
			$this->db->where('user',$user);
			$this->db->where('pass',$pass);
			return $this->db->get('muser')->row();
		}

		public function get_join(){
			$this->db->select('mcustomer.id as id,mcustomer.name as name,mtype.name as nametype,address,email,no_tlp');
			$this->db->from('mcustomer');
			$this->db->join('mtype','mcustomer.type_customer=mtype.id');
			return $this->db->get()->result();
		}

		public function get($table){
			return $this->db->get($table)->result();
		}
		
		public function tambah($table,$dat){  
	        return $this->db->insert($table,$dat);
	    }

		public function get_edit($where,$table){		
			return $this->db->get_where($table,$where)->result();
		}

		public function edit($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}
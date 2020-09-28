<div class="container">
  <div class="card-body">
    <div align="center">
      <a href="#"><h4><i>Table Customer</i></h4></a>
    </div>
    <div align="right">
      <a href="<?= base_url('Controller/logout') ?>" onclick="return confirm('Yakin logout ?')" class="btn btn-danger btn-xs">Logout</a>
      <a href="<?= base_url('Controller/tambah') ?>" class="btn btn-primary btn-xs">Add customer</a>
    </div><br>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Type</th>
            <th>Address</th>
            <th>Email</th>
            <th>No. Telephone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no=0;
          foreach ($data as $in){ 
          $no++;
          ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $in->name ?></td>
            <td><?= $in->nametype ?></td>
            <td><?= $in->address ?></td>
            <td><?= $in->email ?></td>
            <td><?= $in->no_tlp ?></td>
            <td>
              <a href="<?= base_url('Controller/edit/'.$in->id) ?>"><i class="fa fa-edit"></i></a> | 
              <a href="<?= base_url('Controller/hapus/'.$in->id) ?>" onclick="return confirm('Yakin hapus ?')"><i class="fa fa-trash" style="color: red"></i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div><br>
    <div align="right">
      <a href="<?= base_url('Controller/type') ?>">Type Customer &raquo;</a>
    </div>
  </div>
</div>
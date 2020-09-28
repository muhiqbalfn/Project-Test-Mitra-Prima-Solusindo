<div class="container">
  <div class="card-body">
    <div align="center">
      <a href="#"><h4><i>Table Type</i></h4></a>
    </div>
    <div align="right">
      <a href="<?= base_url('Controller/logout') ?>" onclick="return confirm('Yakin logout ?')" class="btn btn-danger btn-xs">Logout</a>
      <a href="<?= base_url('Controller/tambah_type') ?>" class="btn btn-primary btn-xs">Add type</a>
    </div><br>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Record By</th>
            <th>Update By</th>
            <th>Update Date</th>
            <th>Record Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no=0;
          foreach ($type as $in){ 
          $no++;
          ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $in->name ?></td>
            <td><?= $in->record_by ?></td>
            <td><?= $in->update_by ?></td>
            <td><?= $in->update_date ?></td>
            <td><?= $in->record_date ?></td>
            <td>
              <a href="<?= base_url('Controller/edit_type/'.$in->id) ?>"><i class="fa fa-edit"></i></a> | 
              <a href="<?= base_url('Controller/hapus_type/'.$in->id) ?>" onclick="return confirm('Yakin hapus type ?')"><i class="fa fa-trash" style="color: red"></i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div><br>
    <div align="right">
      <a href="<?= base_url('Controller') ?>">&laquo; Customer</a>
    </div>
  </div>
</div>
<div class="container" align="center">
  <div align="center">
      <a href="#"><h4><i>Form Edit Type</i></h4></a>
  </div>
  <div class="card-body col-md-6">
    <?php foreach($data as $u){ ?>
      <form action="<?=base_url('Controller/proses_edit_type')?>" method="post">
        <div class="modal-body">
          <div class="form-group">
              <input type="text" class="form-control" name="id" value="<?= $u->id ?>" readonly>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="name" value="<?= $u->name ?>" required>
          </div>
        </div>
        <div class="modal-footer">
            <a href="<?= base_url('Controller/type') ?>" class="btn">Cancel</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>    
    <?php } ?>
  </div>
</div>
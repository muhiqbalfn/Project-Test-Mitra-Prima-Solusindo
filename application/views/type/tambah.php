<div class="container" align="center">
  <div align="center">
      <a href="#"><h4><i>Form Add Type</i></h4></a>
  </div>
  <div class="card-body col-md-6">
      <form action="<?=base_url('Controller/proses_tambah_type')?>" method="post">
        <div class="modal-body">
          <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name type" required>
          </div>
        </div>
        <div class="modal-footer">
            <a href="<?= base_url('Controller/type') ?>" class="btn">Cancel</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>    
  </div>
</div>
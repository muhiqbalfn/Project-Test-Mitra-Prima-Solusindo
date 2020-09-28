<div class="container" align="center">
  <div align="center">
      <a href="#"><h4><i>Form Edit Customer</i></h4></a>
  </div>
  <div class="card-body col-md-6">
    <?php foreach($data as $u){ ?>
      <form action="<?=base_url('Controller/proses_edit')?>" method="post">
        <div class="modal-body">
          <div class="form-group">
              <input type="text" class="form-control" name="id" value="<?= $u->id ?>" readonly>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="name" value="<?= $u->name ?>" required>
          </div>
          <div class="form-group">
              <select class="form-control" name="type_customer">
                <?php foreach ($type as $in){ ?>
                <option value="<?= $in->id ?>" <?php if ($u->type_customer == $in->id) {echo "selected";} ?>>
                  <?= $in->name ?></option>
                <?php } ?>
              </select>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="address" value="<?= $u->address ?>" required>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="email" value="<?= $u->email ?>" required>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="no_tlp" value="<?= $u->no_tlp ?>" required>
          </div>
        </div>
        <div class="modal-footer">
            <a href="<?= base_url('Controller') ?>" class="btn">Cancel</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>    
    <?php } ?>
  </div>
</div>
<div class="container" align="center">
  <div align="center">
      <a href="#"><h4><i>Form Add Customer</i></h4></a>
  </div>
  <div class="card-body col-md-6">
      <form action="<?=base_url('Controller/proses_tambah')?>" method="post">
        <div class="modal-body">
          <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <table style="width: 125%">
              <tr>
                <td>
                  <select class="form-control" name="type_customer">
                <?php foreach ($type as $in){ ?>
                <option value="<?= $in->id ?>"><?= $in->name ?></option>
                <?php } ?>
              </select>
                </td>
                <td><a href="#mdl" class="btn btn-default" data-toggle="modal"><i class="fa fa-plus"></i></a></td>
              </tr>
            </table>  
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address" required>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
                <input type="text" class="form-control" name="no_tlp" placeholder="No. Telephone" required>
          </div>
        </div>
        <div class="modal-footer">
            <a href="<?= base_url('Controller') ?>" class="btn">Cancel</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>    
  </div>
</div>

<!-- MODAL TYPE -->
<div class="modal fade" id="mdl" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h4 class="modal-title" id="myModalLabel">Customer Type</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?= base_url('Controller/proses_tambah_modal') ?>" method="POST">
              <div class="modal-body">
                  <div class="form-group">
                      <div class="col-lg-12">
                          <label>Berkas</label>
                          <input type="text" name="name" class="form-control" required>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                  <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
            </form>
        </div>
    </div>
</div>
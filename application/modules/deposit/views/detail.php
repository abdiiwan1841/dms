<style>
tr {
	cursor: pointer;
}
a.btn {
	margin: 0 15px 15px 0 !important;
}
</style>
<div class="row">
<div class="col-lg-12">
  <section class="panel">
    <header class="panel-heading"> Tambah Pembelian </header>
    <div class="panel-body">
      <form class="form-horizontal bucket-form" method="post">
        <div class="form-group">
          <label class="col-lg-2 control-label">No. Faktur</label>
          <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="No. Faktur">
          </div>
          <label class="col-lg-2 control-label">Total</label>
          <div class="col-lg-4">
            <input class="form-control"  size="16" type="text" placeholder="Total" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Penjual</label>
          <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="Penjual">
          </div>
          <label class="col-lg-2 control-label">Bayar</label>
          <div class="col-lg-4">
            <input class="form-control"  size="16" type="text" value="" placeholder="Bayar"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Tanggal</label>
          <div class="col-lg-4">
              <input type="text" class="form-control form-control-inline input-medium default-date-picker" placeholder="28/07/2015">
          </div>
          <label class="col-lg-2 control-label">Penanggung Jawab</label>
          <div class="col-lg-4">
            <input class="form-control"  size="16" type="text" value="" placeholder="Penanggung Jawab"/>
          </div>
        </div>
      </form>
      <br>
      <hr>
      <div class="adv-table">
        <table  class=" table table-striped">
          <thead>
            <tr>
              <th>No. Polisi</th>
              <th>Merk</th>
              <th>Model</th>
              <th>Tahun Pembuatan</th>
              <th>Harga Beli</th>
              <th>Umur (bln)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <tr>
              <th>No. Polisi</th>
              <th>Merk</th>
              <th>Model</th>
              <th>Tahun Pembuatan</th>
              <th>Harga Beli</th>
              <th>Umur (bln)</th>
            </tr>
            </tr>
          </tfoot>
        </table>
    </div>
    <button name="tambah" id="tambah" class="btn btn-primary">Tambah <i class="fa fa-plus"></i></button>
    <?php echo anchor('purchase/add','Tambah','class="btn btn-info pull-right"');?>
    <div class="clearfix"></div>
  </section>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalAdd" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Detail</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal bucket-form" method="post">
        <div class="form-group">
          <label class="col-lg-2 control-label">No</label>
          <div class="col-lg-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="No. Urut" disabled>
            </div>
          </div>
          <label class="col-lg-2 control-label">No. Polisi</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Merk</label>
          <div class="col-lg-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Merk" id="automerk">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span> </div>
          </div>
          <label class="col-lg-2 control-label">Model</label>
          <div class="col-lg-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Model" id="automodel">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span> </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Isi Silinder</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
          <label class="col-lg-2 control-label">Th. Pembuatan</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Warna</label>
          <div class="col-lg-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Warna" id="autowarna">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span> </div>
          </div>
          <label class="col-lg-2 control-label">Nama BPKB</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Alamat BPKB</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
          <label class="col-lg-2 control-label">No. Rangka</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">No. Mesin</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
          <label class="col-lg-2 control-label">No. BPKB</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Harga Beli</label>
          <div class="col-lg-4">
            <input type="text" placeholder="" data-mask="999,999,999.99" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Harga Beli dalam angka">
          </div>
          <label class="col-lg-2 control-label">Umur (Bln)</label>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Akhir STNK</label>
          <div class="col-lg-4">
            <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
          </div>
        </div>
        </form>
        <div style="clear:both"></div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button">Simpan <i class="fa fa-save"></i></button>
        <button data-dismiss="modal" class="btn btn-danger" type="button">Batal <i class="fa fa-times"></i></button>
      </div>
    </div>
  </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalWarna" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Warna</h4>
      </div>
      <div class="modal-body"> </div>
    </div>
  </div>
</div>
<script>
	function detail(no_faktur){
		alert(no_faktur);
	}
</script>
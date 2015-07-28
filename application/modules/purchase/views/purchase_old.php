<div class="row">
<div class="col-lg-12">
					<div class="form-group">
                        <div class="col-lg-10">
                        </div>
                        <div class="col-lg-2">
                            <button type="reset" class="btn btn-info">Import Excel <i class="fa fa-list-alt"></i></button>
                        </div>
                    </div><br><br>
                    <section class="panel">
                        <header class="panel-heading">
                            Pembelian Sepeda Motor
                        </header>
                        <div class="panel-body">
						<form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">No. Faktur</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                        <input type="text" class="form-control" placeholder="No. Faktur" disabled>
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                                </span>
                                    </div>
                        </div>
						<label class="col-lg-2 control-label">Tanggal</label>
                        <div class="col-lg-4">
                            <input class="form-control form-control-inline input-medium default-date-picker" id="datepicker" size="16" type="text" value="" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-lg-2 control-label">Penjual</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Penjual" id="autopenjual">
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                                </span>
                                    </div>
                        </div>						
                        <label class="col-lg-2 control-label">Surat Jalan</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                        <input type="text" class="form-control" disabled>
                                    </div>
                        </div>
                    </div>
					<div class="form-group">
					<label class="col-lg-2 control-label">Keterangan</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>
                </form>
                        </div>
                    </section>
					<section class="panel">
					<header class="panel-heading">
                            Detail Sepeda Motor
                        </header>
						<div class="panel-body">
						<form class="form-horizontal bucket-form" method="get">

                            <table class="table">
                                <thead>
                                <tr>
                                    <td>No</td>
                                    <td>No. Polisi</td>
                                    <td>Merk</td>
                                    <td>Model</td>
                                    <td>Warna</td>
                                    <td>Harga Beli</td>
                                    <td>Detil</td>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
					    </form>
						</div>
                        <div class="panel-footer">
                            <button name="tambah" id="tambah" class="btn btn-primary">Tambah <i class="fa fa-plus"></i></button>
                        </div>
					</section>
					
					<section class="panel">
                        <header class="panel-heading">
                            Total
                        </header>
                        <div class="panel-body">
						<form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Unit</label>
                        <div class="col-lg-1">
                            <input type="text" class="form-control" disabled>
                        </div>
						<label class="col-lg-1 control-label">Harga</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" disabled>
                        </div>
                        <label class="col-lg-1 control-label">PPN</label>
                        <div class="col-lg-2">
                            <div class="input-group">
                                        <input type="text" class="form-control" placeholder="PPN" disabled>
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">%</button>
                                                </span>
                                    </div>
                        </div>						
                        <label class="col-lg-1 control-label">Total</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>
					<div class="form-group">
					<label class="col-lg-1 control-label">Bayar</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" disabled>
                        </div>
						<label class="col-lg-1 control-label">Sisa</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" disabled>
                        </div>
                        <label class="col-lg-1 control-label">Tanda Tangan</label>
                        <div class="col-lg-3">
                            <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tanda Tangan">
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                                </span>
                                    </div>
                        </div>
                    </div>
					<button type="submit" class="btn btn-info">Submit <i class="fa fa-save"></i></button>
					<button type="submit" class="btn btn-info">Cetak <i class="fa fa-print"></i></button>
					<button type="reset" class="btn btn-info">Hapus <i class="fa fa-times"></i></button>
					<button type="reset" class="btn btn-info">Baru <i class="fa fa-file-o"></i></button>
                </form>
                        </div>
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
                                        </span>
                                    </div>
                        </div>
                        <label class="col-lg-2 control-label">Model</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Model" id="automodel">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
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
                                </span>
                            </div>
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
              <div class="modal-body">

              </div>
          </div>
      </div>
 </div>
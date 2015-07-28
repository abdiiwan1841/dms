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
    <?php echo form_open('purchase/simpanFaktur','class="form-horizontal form-add-faktur"')?>
    <header class="panel-heading"> Tambah Pembelian </header>
    <div class="panel-body">
      
        <div class="form-group">
          <label class="col-lg-2 control-label">No. Faktur</label>
          <div class="col-lg-4">
              <input type="text" name= "no_faktur" value="<?php echo $no_faktur?>" class="form-control" placeholder="No. Faktur" readonly required>
          </div>
          <label class="col-lg-2 control-label">Tanggal</label>
          <div class="col-lg-4">
              <input name = "tanggal" type="text" class="form-control form-control-inline input-medium default-date-picker" placeholder="28/07/2015" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Penjual</label>
          <div class="col-lg-4">
          	  <?php echo form_dropdown('id_supplier',$data_penjual,'','class="form-control" placeholder="Penjual" required');?>
          </div>
          <label class="col-lg-2 control-label">Penanggung Jawab</label>
          <div class="col-lg-4">
            <?php echo form_dropdown('id_pegawai',$data_pegawai,'','class="form-control" placeholder="Penanggung Jawab" required');?>
          </div>
        </div>
     
      <br>
      <hr>
      <div class="adv-table">
        <table  class=" table table-striped table-motor">
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
          <tbody class="tbody-motor">
            <tr class="row-default">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
    </div>
    <br>
    <button name="tambah" type="button" id="tambah" class="btn btn-info pull-right">Tambah Motor</button>
    <div class="clearfix"></div>
    <br>
    <div class="form-group">
          <label class="col-lg-1 control-label">Total</label>
          <div class="col-lg-11">
            <input name="total" class="form-control total-harga-motor"  size="16" type="text" placeholder="Total" readonly required/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-1 control-label">Bayar</label>
          <div class="col-lg-11">
            <input name = "bayar" class="form-control"  size="16" type="text" value="" placeholder="Bayar" required/>
          </div>
        </div>
    <div class="id_motors_area">
    	
    </div>
    <br>
    <button type="submit" class="btn btn-info pull-right buat-faktur" disabled>Buat Faktur</button>
    <div class="clearfix"></div>
     </form>
  </section>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalAdd" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tambah Motor</h4>
      </div>
      <?php echo form_open('purchase/simpanMotor','class="form-horizontal form-add-motor"')?>
      <div class="modal-body">
      <div class="form-group">
          
          <label class="col-lg-2 control-label">No. Polisi</label>
          <div class="col-lg-4">
            <input type="text" name="no_polisi" class="form-control" required placeholder="No. Polisi">
          </div>
          <label class="col-lg-2 control-label">Merk</label>
          <div class="col-lg-4">
            <input type="text" name="merk" class="form-control" placeholder="Merk" id="automerk" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Model</label>
          <div class="col-lg-4">
            <input type="text" name= "model" class="form-control" placeholder="Model" id="automodel" required>
          </div>
          <label class="col-lg-2 control-label">Isi Silinder</label>
          <div class="col-lg-4">
            <input type="text" name = "isi_silinder" class="form-control" placeholder="Isi Silinder" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Akhir STNK</label>
          <div class="col-lg-4">
            <input name = "tanggal_akhir_stnk" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" placeholder="Akhir STNK" required/>
          </div>
          <label class="col-lg-2 control-label">Th. Pembuatan</label>
          <div class="col-lg-4">
            <input type="text" name = "tahun_pembuatan" class="form-control" placeholder="Tahun Pembuatan" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Warna</label>
          <div class="col-lg-4">
            <input type="text" name "warna" class="form-control" placeholder="Warna" id="autowarna" required>
              
          </div>
          <label class="col-lg-2 control-label">Nama BPKB</label>
          <div class="col-lg-4">
            <input type="text" name = "nama_bpkb"class="form-control" placeholder="Nama BPKB" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Alamat BPKB</label>
          <div class="col-lg-4">
            <input type="text" name = "alamat_bpkb" class="form-control" placeholder="Alamat BPKB" required>
          </div>
          <label class="col-lg-2 control-label">No. Rangka</label>
          <div class="col-lg-4">
            <input type="text" name = "no_rangka" class="form-control" placeholder="No. Rangka" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">No. Mesin</label>
          <div class="col-lg-4">
            <input type="text" name = "no_mesin" class="form-control" placeholder="No. Mesin" required>
          </div>
          <label class="col-lg-2 control-label">No. BPKB</label>
          <div class="col-lg-4">
            <input type="text" name = "no_bpkb" class="form-control" placeholder="No. BPKB" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Harga Beli</label>
          <div class="col-lg-4">
            <input type="text" name = "harga_beli" placeholder="" data-mask="999,999,999.99" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Harga Beli dalam angka" placeholder="Harga Beli" required>
          </div>
          <label class="col-lg-2 control-label">Umur (Bln)</label>
          <div class="col-lg-4">
            <input type="text" name = "umur" class="form-control" placeholder="Umur (Bln)" required>
          </div>
        </div>
        
        <div style="clear:both"></div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">Simpan <i class="fa fa-save"></i></button>
        <button data-dismiss="modal" class="btn btn-danger" type="button">Batal <i class="fa fa-times"></i></button>
      </div>
      </form>
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
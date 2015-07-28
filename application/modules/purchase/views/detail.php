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
    <?php echo form_open('purchase/ubahFaktur','class="form-horizontal form-update-faktur"')?>
    <header class="panel-heading"> Detail Pembelian </header>
    <div class="panel-body">
      
        <div class="form-group">
          <label class="col-lg-2 control-label">No. Faktur</label>
          <div class="col-lg-4">
              <input type="text" name= "no_faktur" class="form-control" placeholder="No. Faktur" value="<?php echo $data_purchase['no_faktur']?>" readonly>
          </div>
          <label class="col-lg-2 control-label">Bayar</label>
          <div class="col-lg-4">
            <input name = "bayar" class="form-control"  size="16" type="text" value="<?php echo $data_purchase['bayar']?>" placeholder="Bayar"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Penjual</label>
          <div class="col-lg-4">
          		<?php echo form_dropdown('id_supplier',$data_penjual,$data_purchase['nama_suplier'],'class="form-control" placeholder="Penjual"');?>
          </div>
          <label class="col-lg-2 control-label">Penanggung Jawab</label>
          <div class="col-lg-4">
          		<?php echo form_dropdown('id_pegawai',$data_pegawai,$data_purchase['nama'],'class="form-control" placeholder="Penanggung Jawab"');?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Tanggal</label>
          <div class="col-lg-4">
              <input name = "tanggal" type="text" class="form-control form-control-inline input-medium default-date-picker" placeholder="28/07/2015" value="<?php echo $data_purchase['tanggal']?>">
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
            <?php 
			$sumTotal = 0;
			foreach($data_motors as $motor){ ?>
            <tr>
              <td><?php echo $motor['no_polisi']?></td>
              <td><?php echo $motor['merk']?></td>
              <td><?php echo $motor['model']?></td>
              <td><?php echo $motor['tahun_pembuatan']?></td>
              <td><?php echo $motor['harga_beli']?></td>
              <td><?php echo $motor['umur']?></td>
            </tr>
            <?php 
				$sumTotal += str_replace('.','',$motor['harga_beli']);
			}?>
          </tbody>
        </table>
    </div>
    <br>
    <div class="form-group">
          <label class="col-lg-1 control-label">Total</label>
          <div class="col-lg-11">
            <input name="total" value="<?php echo number_format($sumTotal, 0, '.', '.');?>" class="form-control total-harga-motor"  size="16" type="text" placeholder="Total" readonly/>
          </div>
        </div>
    <div class="id_motors_area">
    	
    </div>
    <br>
    <button type="submit" class="btn btn-info pull-right buat-faktur" disabled>Ubah Faktur</button>
    <div class="clearfix"></div>
     </form>
  </section>
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
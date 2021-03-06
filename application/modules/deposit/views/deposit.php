<style>
tr {
	cursor: pointer;
}
a.btn{
	margin:0 15px 15px 0 !important;	
}
</style>
<div class="row">
<div class="col-lg-12">
  <section class="panel">
    <header class="panel-heading"> Data Penitipan </header>
    <div class="panel-body">
      <div class="adv-table">
        <table  class="display table table-hover " id="dynamic-table">
          <thead>
            <tr>
              <th>No. Faktur</th>
              <th>Tanggal</th>
              <th>Penjual</th>
              <th>Jumlah Unit</th>
              <th>Total</th>
              <th>Bayar</th>
              <th>Sisa</th>
              <th>Penanggung Jawab</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data_deposit as $deposit){ ?>
            <tr class="gradeA" onClick="detail('<?php echo $deposit['no_faktur']?>')">
              <td><?php echo $deposit['no_faktur']?></td>
              <td><?php echo $deposit['tanggal']?></td>
              <td><?php echo $deposit['nama_supplier']?></td>
              <td><?php echo $deposit['jumlah_unit']?></td>
              <td><?php echo $deposit['total']?></td>
              <td><?php echo $deposit['bayar']?></td>
              <td><?php echo $deposit['sisa']?></td>
              <td><?php echo $deposit['nama_pegawai']?></td>
            </tr>
            <?php }?>
          </tbody>
          <tfoot>
            <tr>
              <th>No. Faktur</th>
              <th>Tanggal</th>
              <th>Penjual</th>
              <th>Jumlah Unit</th>
              <th>Total</th>
              <th>Bayar</th>
              <th>Sisa</th>
              <th>Penanggung Jawab</th>
            </tr>
          </tfoot>
        </table>
        
      </div>
      
    </div>
    <?php echo anchor('deposit/add','Tambah','class="btn btn-info pull-right"');?>
    <div class="clearfix"></div>
  </section>
</div>
<script>
	function detail(no_faktur){
		document.location = '<?php echo base_url('deposit/detail')?>/'+no_faktur;
	}
</script>
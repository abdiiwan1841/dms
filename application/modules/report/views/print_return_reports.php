<div class="row">
<div class="col-lg-12">
  <section class="panel">
                   
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-hover table-bordered table-striped" id="dynamic-table">
                    <thead>
                   <tr>
                        <th>No. Faktur</th>
                        <th>Tanggal</th>
                        <th>No Polisi</th>
                        <th>Merk Unit</th>
                        <th>Model</th>
                        <th>Isi Silinder</th>
                        <th>Tahun Pembuatan</th>
                        <th>Harga Beli</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data_return as $purchase){ ?>
                    <tr class="gradeA" onClick="detail('<?php echo $purchase['no_faktur']?>')">
                        <td><?php echo $purchase['no_faktur']?></td>
                        <td><?php echo $purchase['tanggal']?></td>
                        <td><?php echo $purchase['no_polisi']?></td>
                        <td><?php echo $purchase['merk']?></td>
                        <td><?php echo $purchase['model']?></td>
                        <td><?php echo $purchase['isi_silinder']?></td>
                        <td><?php echo $purchase['tahun_pembuatan']?></td>
                        <td>Rp.<?php echo $purchase['harga_beli'];?></td>
                    </tr>
                    <?php }?>
                    
                    </tbody>
                 
                    </table>
                    </div>
                    </div>
                </section>
    
    
      
  
                      </div>
                   
</div>




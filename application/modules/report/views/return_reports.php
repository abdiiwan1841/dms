<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Daftar Motor Retur
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-cog"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
              
                    <div class="col-lg-12 bg-info">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="input-group input-sm" data-date="13/07/2013" data-date-format="yyyy-mm-dd">
                                <input type="text" class="form-control dpd1 default-date-picker" id="from" name="from" placeholder="tanggal awal">
                                <span class="input-group-addon">sampai</span>
                                <input type="text" class="form-control dpd2 default-date-picker" id="to" name="to" placeholder="tanggal akhir">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-warning" type="button" style="margin-top: 5px;">
                                <a href="#" onclick="cetak_return()">
                                    <b>Cetak</b>
                                </a> <i class="fa fa-print"></i>
                            </button> 
                            <button class="btn btn-primary" type="button"  style="margin-top: 5px;">
                                <a href="#" onclick="lihat_return()">
                                    <b>Lihat</b>
                                </a> <i class="fa fa-book"></i>
                            </button> 
                        </div>
                    </div>
                
                <div class="adv-table">
                    <table  class="display table table-hover table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>No. Faktur</th>
                                <th>Tanggal</th>
                                <th>No Polisi</th>
                                <th>Merk Unit</th>
                                <th>Model</th>
                                <th>Isi Silinder</th>
                                <th>Tahun Pembuatan</th>
                                <th>Harga Beli</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data_return as $purchase) {
                                ?>
                                <tr class="gradeA" onClick="detail('<?php echo $purchase['no_faktur'] ?>')">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $purchase['no_faktur'] ?></td>
                                    <td><?php echo $purchase['tanggal'] ?></td>
                                    <td><?php echo $purchase['no_polisi'] ?></td>
                                    <td><?php echo $purchase['merk'] ?></td>
                                    <td><?php echo $purchase['model'] ?></td>
                                    <td><?php echo $purchase['isi_silinder'] ?></td>
                                    <td><?php echo $purchase['tahun_pembuatan'] ?></td>
                                    <td>Rp.<?php echo $purchase['harga_beli']; ?></td>
                                    <td><?php echo $purchase['keterangan']; ?></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </section>




    </div>
</div>





<script>
    function detail(no_faktur) {
        alert(no_faktur);
    }
    
      function lihat_return() {
            var from = document.getElementById("from").value;
            var to = document.getElementById("to").value;

            document.location.href = "<?php echo base_url(); ?>report/view_return_reports/" + from + "/" + to;
        }

        function cetak_return() {
            var from = document.getElementById("from").value;
            var to = document.getElementById("to").value;

            document.location.href = "<?php echo base_url(); ?>report/print_return_reports/" + from + "/" + to;
        }
</script>
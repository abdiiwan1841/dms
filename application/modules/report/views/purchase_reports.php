<div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Daftar Pembelian Motor
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
                                <input  type="text" class="form-control dpd1 default-date-picker" id="from" name="from" placeholder="tanggal awal">
                                <span class="input-group-addon">sampai</span>
                                <input type="text" class="form-control dpd2 default-date-picker" id="to" name="to" placeholder="tanggal akhir">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-warning" type="button" style="margin-top: 5px;">
                                 <a href="#" onclick="cetak()">
                                    <b>Cetak</b>
                                </a> <i class="fa fa-print"></i>
                            </button> 
                            
                            
                            <button class="btn btn-primary" type="button"  style="margin-top: 5px;">
                                <a href="#" onclick="lihat()">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = 1;
                            foreach ($data_purchase as $purchase) {
                                ?>
                                <tr class="gradeA" onClick="detail('<?php echo $purchase['no_faktur'] ?>')">
                                    <td><?php echo $a; ?></td>
                                    <td><?php echo $purchase['no_faktur'] ?></td>
                                    <td><?php echo $purchase['tanggal'] ?></td>
                                    <td><?php echo $purchase['no_polisi'] ?></td>
                                    <td><?php echo $purchase['merk'] ?></td>
                                    <td><?php echo $purchase['model'] ?></td>
                                    <td><?php echo $purchase['isi_silinder'] ?></td>
                                    <td><?php echo $purchase['tahun_pembuatan'] ?></td>
                                    <td>Rp.<?php echo $purchase['harga_beli']; ?></td>
                                </tr>
                                <?php
                                $a++;
                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </section>


        <!--        <label class="control-label col-md-3">Tanggal</label>-->

    </div>

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
    function detail(no_faktur) {
        alert(no_faktur);
    }
    
    
    
    function lihat(){
        var from = document.getElementById("from").value;
        var to = document.getElementById("to").value;
      
      document.location.href="<?php echo base_url(); ?>report/view_purchase_reports/"+from+"/"+to;
    }
    
     function cetak(){
        var from = document.getElementById("from").value;
        var to = document.getElementById("to").value;
      
      document.location.href="<?php echo base_url(); ?>report/print_purchase_reports/"+from+"/"+to;
    }
    
    $('.default-date-picker').datepicker({
    dateFormat: 'yyyy-mm-dd'
});
    
</script>
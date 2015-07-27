<!--dynamic table-->
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/data-tables/DT_bootstrap.css" />
	
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Daftar Pembeli
                        <span class="tools pull-right">
							<button type="submit" class="btn btn-info btn-sm">Tambah <i class="fa fa-plus-square"></i></button>
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span><br>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table-buyer">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th class="hidden-phone">No. Telp</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>1</td>
                        <td>Internet
                            Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">4</td>
                        <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                        <td>2</td>
                        <td>Internet
                            Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">5</td>
                        <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>3</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">5.5</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>4</td>
                        <td>Internet
                            Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center hidden-phone">6</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeU">
                        <td>5</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center hidden-phone">-</td>
                        <td class="center hidden-phone">U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th class="hidden-phone">No. Telp</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
		
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Daftar Penjual
                        <span class="tools pull-right">
							<button type="submit" class="btn btn-info btn-sm">Tambah <i class="fa fa-plus-square"></i></button>
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span><br>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table-seller">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama Penjual</th>
                        <th>Alamat</th>
                        <th class="hidden-phone">No. Telp</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>1</td>
                        <td>Internet
                            Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">4</td>
                        <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                        <td>2</td>
                        <td>Internet
                            Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">5</td>
                        <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>3</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">5.5</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>4</td>
                        <td>Internet
                            Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center hidden-phone">6</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeU">
                        <td>5</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center hidden-phone">-</td>
                        <td class="center hidden-phone">U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama Penjual</th>
                        <th>Alamat</th>
                        <th class="hidden-phone">No. Telp</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>

		<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Daftar Perantara
                        <span class="tools pull-right">
							<button type="submit" class="btn btn-info btn-sm">Tambah <i class="fa fa-plus-square"></i></button>
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span><br>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table-agent">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama Perantara</th>
                        <th>Alamat</th>
                        <th class="hidden-phone">No. Telp</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>1</td>
                        <td>Internet
                            Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">4</td>
                        <td class="center hidden-phone">X</td>
                    </tr>
                    <tr class="gradeC">
                        <td>2</td>
                        <td>Internet
                            Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">5</td>
                        <td class="center hidden-phone">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>3</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center hidden-phone">5.5</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>4</td>
                        <td>Internet
                            Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center hidden-phone">6</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeU">
                        <td>5</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center hidden-phone">-</td>
                        <td class="center hidden-phone">U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Nama Perantara</th>
                        <th>Alamat</th>
                        <th class="hidden-phone">No. Telp</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
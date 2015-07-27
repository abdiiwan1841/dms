<!--dynamic table-->
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/data-tables/DT_bootstrap.css" />
	
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Managemen Pengguna
                        <span class="tools pull-right">
							<button type="submit" class="btn btn-info btn-sm">Tambah <i class="fa fa-plus-square"></i></button>
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span><br>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>No. Akun</th>
                        <th>Nama Akun</th>
                        <th>Keterangan</th>
						<th width="15%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0</td>
                        <td>Win 95+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0</td>
                        <td>Win 95+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td>Win 95+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 6</td>
                        <td>Win 98+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
						<td>
						<button type="submit" class="btn btn-primary btn-sm">Edit <i class="fa fa-check"></i></button> 
						<button type="submit" class="btn btn-danger btn-sm">Hapus <i class="fa fa-times"></i></button> 
						</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No. Akun</th>
                        <th>Nama Akun</th>
                        <th>Keterangan</th>
						<th width="15%"></th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>

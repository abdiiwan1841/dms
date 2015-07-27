<!--dynamic table-->
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/data-tables/DT_bootstrap.css" />
	
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Daftar Tipe Kendaraan
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
                        <th width="5%">No.</th>
                        <th>Tipe Kendaraan</th>
                        <th>Merk</th>
                        <th class="hidden-phone">Model</th>
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
                    <tr class="gradeA">
                        <td>5</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="center hidden-phone">7</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>6</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td class="center hidden-phone">6</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>7</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center hidden-phone">1.7</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>8</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>9</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>10</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="center hidden-phone">1.9</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>11</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>12</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>13</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td class="center hidden-phone">1.7</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>14</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td class="center hidden-phone">1.7</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>15</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>16</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>17</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1.1</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>18</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1.2</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>19</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1.3</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>20</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1.4</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>21</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1.5</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>22</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center hidden-phone">1.6</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>23</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center hidden-phone">1.7</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>24</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>25</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>26</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td class="center hidden-phone">1.8</td>
                        <td class="center hidden-phone">A</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Tipe Kendaraan</th>
                        <th>Merk</th>
                        <th class="hidden-phone">Model</th>
                        <th class="hidden-phone">Keterangan</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>

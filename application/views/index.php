<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Adira Dealer Management Finance">
    <link rel="shortcut icon" href="">
    <title><?php echo $title['title'];?></title>
    <!--Core CSS -->
    <link href="<?php echo base_url();?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/clndr.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-datetimepicker/css/datetimepicker.css" />
    <!--clock css-->
    <link href="<?php echo base_url();?>assets/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet"/>
    
    <!--dynamic table-->
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/data-tables/DT_bootstrap.css" />
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <div style="display: inline-block;">
	<a href="<?php echo base_url();?>" class="logo">
        <img src="<?php echo base_url();?>assets/images/logo_dealer.png" alt="">
    </a>
	</div>
	<div class="dealer_name"><h3>Nama Dealer</h3>
	<h5>Alamat Dealer</h5>
	</div>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
<!--        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="index.html#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June'13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="index.html#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June'13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="index.html#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June'13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="index.html#">See All Tasks</a>
                </li>
            </ul>
        </li>-->
        <!-- settings end -->
        <!-- inbox dropdown start-->
<!--        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/images/avatar-mini-2.jpg"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/images/avatar-mini-3.jpg"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="index.html#">See all messages</a>
                </li>
            </ul>
        </li>
         inbox dropdown end -->
        <!-- notification dropdown start-->
        <!--li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="index.html#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="index.html#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="index.html#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li-->
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <img alt="" src="<?php echo base_url();?>assets/images/avatar_user_male.jpg">
                <span class="username">Administrator </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="index.html#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="index.html#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a  href="<?php echo base_url();?>dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
				<li class="sub-menu active">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Pembelian & Penerimaan Titipan</span>
                    </a>
                    <ul class="sub">
                        <li class="active"><a href="<?php echo base_url();?>purchase">Pembelian</a></li>
                        <li><a href="<?php echo base_url();?>deposit">Titipan</a></li>
						<li><a href="<?php echo base_url();?>purchase/retur">Retur</a></li>
						<li><a href="<?php echo base_url();?>report/purchase_reports">Laporan Pembelian</a></li>
						<li><a href="<?php echo base_url();?>report/deposit_reports">Laporan Konsinyasi</a></li>
                        <li><a  href="<?php echo base_url();?>report/return_reports">Laporan Retur</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Penjualan & Penitipan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>sales">Penjualan</a></li>
                        <li><a href="<?php echo base_url();?>sales/deposit">Titipan</a></li>
						<li><a href="<?php echo base_url();?>sales/retur">Retur</a></li>
						<li><a href="<?php echo base_url();?>sales/sales_reports">Laporan Penjualan</a></li>
						<li><a href="<?php echo base_url();?>sales/consignment_reports">Laporan Konsinyasi</a></li>
                        <li><a href="<?php echo base_url();?>sales/retur_reports">Laporan Retur</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-wrench"></i>
                        <span>Perbaikan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>repair">Perbaikan</a></li>
                        <li><a href="<?php echo base_url();?>repair/repair_reports">Laporan Perbaikan</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-money"></i>
                        <span>Dana Tunai</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>cash">Dana Tunai</a></li>
                        <li><a href="<?php echo base_url();?>cash/cash_reports">Laporan Dana Tunai</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-truck"></i>
                        <span>Stock</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>stock">Stock</a></li>
                        <li><a href="<?php echo base_url();?>stock/stock_reports">Laporan Stock</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-users"></i>
                        <span>Karyawan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>employee">Karyawan</a></li>
                        <li><a href="<?php echo base_url();?>employee/employee_outcome">Pengeluaran Karyawan</a></li>
                        <li><a href="<?php echo base_url();?>employee/employee_reports">Laporan Karyawan</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-usd"></i>
                        <span>Keuangan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>finance/income_cash_flow">Penerimaan Kas/ Bank Bukan Piutang</a></li>
                        <li><a href="<?php echo base_url();?>finance/outcome_cash_flow">Pengeluaran Kas/ Bank Bukan Hutang</a></li>
						<li><a href="<?php echo base_url();?>finance/account_receivables">Penerimaan / Pembayaran Piutang</a></li>
						<li><a href="<?php echo base_url();?>finance/payment_debts">Pembayaran Hutang</a></li>
						<li><a href="<?php echo base_url();?>finance/income_outcome_reports">Laporan Penerimaan / Pengeluaran</a></li>
						<li><a href="<?php echo base_url();?>finance/claim_reports">Laporan Piutang</a></li>
                        <li><a href="<?php echo base_url();?>finance/debt_reports">Laporan Hutang</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Akuntansi</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>accounting/general_ledger_post">Posting GL</a></li>
                        <li><a href="<?php echo base_url();?>accounting/list_of_transactions">List Transaksi</a></li>
						<li><a href="<?php echo base_url();?>accounting/profit_loss_reports">Laporan Neraca dan Rugi Laba</a></li>
                        <li><a href="<?php echo base_url();?>accounting/beginning_balance">Saldo Awal</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Data Master</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?php echo base_url();?>configuration/customer_list">Data Pembeli, Penjual, dan Perantara</a></li>
						<li><a href="<?php echo base_url();?>configuration/vehicle_type_list">Data Tipe Kendaraan</a></li>
                        <li><a href="<?php echo base_url();?>configuration/account_list">Data Akun</a></li>
						<li><a href="<?php echo base_url();?>configuration/user_management">Manajemen Pengguna</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Konfigurasi</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url();?>configuration/company_profile">Profil Perusahaan</a></li>
						<li><a href="<?php echo base_url();?>configuration/backup_restore">Backup and Restore</a></li>
						<li><a href="<?php echo base_url();?>configuration/reset_password_request">Reset Password</a></li>
                    </ul>
                </li>
				
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<?php echo create_breadcrumb($arr_menu);?>
	
<?php $this->load->view($contents); ?>

</section>
</section>
<!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">
<ul class="right-side-accordion">
<li class="widget-collapsible">
    <a href="index.html#" class="head widget-head red-bg active clearfix">
        <span class="pull-left">work progress (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row side-mini-stat clearfix">
                <div class="side-graph-info">
                    <h4>Target sell</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="target-sell">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info payment-info">
                    <h4>payment collection</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-collection">
						<span class="pc-epie-chart" data-percent="45">
						<span class="percent"></span>
						</span>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>delivery pending</h4>
                    <p>
                        44%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="d-pending">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="col-md-12">
                    <h4>total progress</h4>
                    <p>
                        50%, Deadline 12 june 13
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="index.html#" class="head widget-head terques-bg active clearfix">
        <span class="pull-left">contact online (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="index.html#"><img src="<?php echo base_url();?>assets/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="index.html#">Jonathan Smith</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="index.html#"><img src="<?php echo base_url();?>assets/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="index.html#">Anjelina Joe</a></h4>
                    <p>
                        Available
                    </p>
                </div>
                <div class="user-status text-success">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="index.html#"><img src="<?php echo base_url();?>assets/images/chat-avatar2.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="index.html#">John Doe</a></h4>
                    <p>
                        Away from Desk
                    </p>
                </div>
                <div class="user-status text-warning">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="index.html#"><img src="<?php echo base_url();?>assets/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="index.html#">Mark Henry</a></h4>
                    <p>
                        working
                    </p>
                </div>
                <div class="user-status text-info">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="index.html#"><img src="<?php echo base_url();?>assets/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="index.html#">Shila Jones</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <!--p class="text-center">
                <a href="index.html#" class="view-btn">View all Contacts</a>
            </p-->
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="index.html#" class="head widget-head purple-bg active">
        <span class="pull-left"> recent activity (3)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        just now
                    </p>
                    <p>
                        <a href="index.html#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        2 min ago
                    </p>
                    <p>
                        <a href="index.html#">Jane Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        1 day ago
                    </p>
                    <p>
                        <a href="index.html#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
        </li>
    </ul>
</li>
</ul>

</div>

</div>
<!--right sidebar end-->
</section>
<footer>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'Dealer Management System Version <strong>' . APPS_VERSION . '</strong>' : '' ?></p>
<footer>
<!-- Modal Purchase-->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalPurchase" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Laporan Pembelian / Titipan Sepeda Motor</h4>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                                <label class="control-label col-md-3">Tanggal</label>
                                <div class="col-md-8">
                                    <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control dpd1 default-date-picker" name="from">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpd2 default-date-picker" name="to">
                                    </div>
                                    <span class="help-block">Masukkan range tanggal yang akan ditampilkan dalam laporan</span>
                                </div>
                            </div><br><br>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-success" type="button">Cetak <i class="fa fa-print"></i></button>
                          <button data-dismiss="modal" class="btn btn-default" type="button">Batal <i class="fa fa-times"></i></button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
<!-- Modal Consignment-->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalConsignment" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Laporan Konsinyasi</h4>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                                <label class="control-label col-md-3">Tanggal</label>
                                <div class="col-md-8">
                                    <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control dpd1 default-date-picker" name="from">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpd2 default-date-picker" name="to">
                                    </div>
                                    <span class="help-block">Masukkan range tanggal yang akan ditampilkan dalam laporan</span>
                                </div>
                            </div><br><br>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-success" type="button">Cetak <i class="fa fa-print"></i></button>
                          <button data-dismiss="modal" class="btn btn-default" type="button">Batal <i class="fa fa-times"></i></button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
<!-- Modal Retur-->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalRetur" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Laporan Retur</h4>
                      </div>
                      <div class="modal-body">
							  <div class="form-group">
									<div class="col-lg-12 icheck minimal">
                                            <div class="radio single-row">
                                                <input tabindex="3" type="radio"  name="demo-radio">
                                                <label>Retur Pembelian</label>
                                            </div>

                                            <div class="radio single-row">
                                                <input tabindex="3" type="radio"  name="demo-radio">
                                                <label>Retur Titipan Masuk</label>
                                            </div>

                                            <div class="radio single-row">
                                                <input tabindex="3" type="radio"  name="demo-radio">
                                                <label>Retur Titipan Keluar</label>
                                            </div>
                                        </div>
										</div>
                          <div class="form-group">
                                <label class="control-label col-md-3">Tanggal</label>
                                <div class="col-md-8">
                                    <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control dpd1 default-date-picker" name="from">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpd2 default-date-picker" name="to">
                                    </div>
                                    <span class="help-block">Masukkan range tanggal yang akan ditampilkan dalam laporan</span>
                                </div>
                            </div><br><br>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-success" type="button">Cetak <i class="fa fa-print"></i></button>
                          <button data-dismiss="modal" class="btn btn-default" type="button">Batal <i class="fa fa-times"></i></button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>assets/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>

<!-- Datetime -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url();?>assets/js/skycons/skycons.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/js/calendar/clndr.js"></script>
<script src="<?php echo base_url();?>assets/js/underscore-min.js"></script>
<script src="<?php echo base_url();?>assets/js/calendar/moment-2.2.1.js"></script>
<script src="<?php echo base_url();?>assets/js/evnt.calendar.init.js"></script>
<script src="<?php echo base_url();?>assets/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<?php if($this->uri->segment(1, 0) == 'dashboard') { ?>
<script src="<?php echo base_url();?>assets/js/gauge/gauge.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo base_url();?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url();?>assets/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url();?>assets/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.customSelect.min.js" ></script>
<?php } else { ?>
<?php } ?>
<!--clock init-->
<script src="<?php echo base_url();?>assets/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url();?>assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url();?>assets/js/sparkline/jquery.sparkline.js"></script>
<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/data-tables/DT_bootstrap.js"></script>
<!--Morris Chart-->
<script src="<?php echo base_url();?>assets/js/morris-chart/morris.js"></script>
<script src="<?php echo base_url();?>assets/js/morris-chart/raphael-min.js"></script>
<!--common script init for all pages-->
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<!--script for this page-->
<!--dynamic table initialization -->
<script src="<?php echo base_url();?>assets/js/dynamic_table_init.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".default-date-picker").datepicker({
            autoclose: true,
            format: "dd/mm/yyyy"
        });

        $(".default-date-picker").on('changeDate', function(ev){
            $(this).datepicker('hide');
        });

        $("#tambah").click(function(){
            $("#ModalAdd").modal();
        });

        $("#automerk").autocomplete({
            source: ["HONDA","YAMAHA","SUZUKI","PULSAR"],
            minLength: 0
        }).focus(function(){            
            $(this).trigger('keydown');
        }); 

        $("#automodel").autocomplete({
            source: ["CW","CAKRAM"],
            minLength: 0
        }).focus(function(){            
            $(this).trigger('keydown');
        }); 

        $("#autowarna").autocomplete({
            source: ["HITAM","SILVER","PUTIH","REPSOL","MERAH"],
            minLength: 0
        }).focus(function(){            
            $(this).trigger('keydown');
        }); 

        $("#autopenjual").autocomplete({
            source: ["HASAN","TIFFAN","RIDA","BILLY","ADI"],
            minLength: 0
        }).focus(function(){            
            $(this).trigger('keydown');
        }); 

        $("#autopenjual").keypress(function(e){
            code= (e.keyCode ? e.keyCode : e.which);
            if (code == 13) {
                //loadData();
                return false;
            } else {
                 $(this).trigger('keydown');
            }
            //e.preventDefault();
        });
    })
	$('btn').click(function(e) {
        
    });
	
	
	// pembelian
	$('.form-add-motor').submit(function(e) {
        e.preventDefault();
		var data_motor = $(this).serialize();
		$.ajax({
			url:$(this).attr('action'),
			type:'POST',
			data:data_motor,
			success: function(result){
				var append = "<tr>";
				var id_motor_append = '';
				var total = 0;
				var value = $.parseJSON(result);
				//$.each(result, function(index, value){
					append += "<td>"+value.no_pol+"</td>";
					append += "<td>"+value.merk+"</td>";
					append += "<td>"+value.model+"</td>";
					append += "<td>"+value.th_pembuatan+"</td>";
					append += "<td class='harga_beli'>"+value.harga+"</td>";
					append += "<td>"+value.umur+"</td>";
					id_motor_append += "<input type='hidden' value='"+value.id_motor+"' name='id_motors[]'>"; 
				//})
				append += "</tr>";
				
				
				$('.row-default').remove();
				$('.tbody-motor').append(append);
				$('.harga_beli').each(function() {
					total += parseInt($(this).html());  
				 });
				$('.total-harga-motor').val(total);
				$('.id_motors_area').append(id_motor_append);
				$('#ModalAdd').modal('hide');
			}
		});
		$('.form-add-motor')[0].reset();
		$('.buat-faktur').removeAttr('disabled');
    });
	$('.form-add-faktur').submit(function(e) {
        e.preventDefault();
		var data_motor = $(this).serialize();
		console.log(data_motor);
		$.ajax({
			url:$(this).attr('action'),
			type:'POST',
			data:data_motor,
			success: function(result){
				document.location.reload();
			}
		});
		$('.form-add-faktur')[0].reset();
    });
	
	$(document).ready(function() { 
	   $('.form-update-faktur input').keypress(function() { 
			$('.ubah-faktur').removeAttr('disabled');
	   });
	   $('.form-update-faktur select').change(function() { 
			$('.ubah-faktur').removeAttr('disabled');
	   }); 
	});
</script>
</body>
</html>

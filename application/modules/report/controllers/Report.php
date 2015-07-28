<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

    public function purchase_reports() {
        $this->load->model('reportmodel');
        $data['contents'] = 'report/purchase_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Pembelian'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );

        $data['data_purchase'] = $this->reportmodel->getPurchaseReport('')->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);
    }

    public function deposit_reports() {

        $this->load->model('reportmodel');
        $data['contents'] = 'report/deposit_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Konsinyasi'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );

        $data['data_deposit'] = $this->reportmodel->getDepositReport('')->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);
    }

    public function return_reports() {

        $this->load->model('reportmodel');
        $data['contents'] = 'report/return_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Retur'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );

        $data['data_return'] = $this->reportmodel->getReturnReport('')->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);
    }

    //ADI
    public function print_purchase_reports($from_tanggal = '', $from_bulan = '', $from_tahun = '', $to_tanggal = '', $to_bulan = '', $to_tahun = '') {

      if ($from_tahun != '' || $to_tahun != '') {
            $from = $from_tahun . "-" . $from_bulan . "-" . $from_tanggal;
            $to = $to_tahun . "-" . $to_bulan . "-" . $to_tanggal;
        }else{
             $from='';
             $to='';
        }

        $this->load->model('reportmodel');
        $data['contents'] = 'report/purchase_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Pembelian'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );
        $data['data_purchase'] = $this->reportmodel->getPurchaseReport($from, $to)->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);

        $this->load->library('Pdf');
        $file_name = "assets/print_purchase_reports.pdf";

        $data['test'] = "print_purchase_reports";

        $this->pdf->pdf_create($this->load->view('report/print_purchase_reports', $data, TRUE), $file_name, FALSE);

        header("location: http://" . $_SERVER['HTTP_HOST'] . "/dms/assets/print_purchase_reports.pdf");
    }

    public function print_deposit_reports($from_tanggal = '', $from_bulan = '', $from_tahun = '', $to_tanggal = '', $to_bulan = '', $to_tahun = '') {

          if ($from_tahun != '' || $to_tahun != '') {
            $from = $from_tahun . "-" . $from_bulan . "-" . $from_tanggal;
            $to = $to_tahun . "-" . $to_bulan . "-" . $to_tanggal;
        }else{
             $from='';
             $to='';
        }
      

        $this->load->model('reportmodel');
        $data['contents'] = 'report/deposit_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Penitipan'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );
        $data['data_purchase'] = $this->reportmodel->getDepositReport($from, $to)->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);

        $this->load->library('Pdf');
        $file_name = "assets/print_deposit_reports.pdf";

       

        $this->pdf->pdf_create($this->load->view('report/print_purchase_reports', $data, TRUE), $file_name, FALSE);

        header("location: http://" . $_SERVER['HTTP_HOST'] . "/dms/assets/print_deposit_reports.pdf");
    }

    
    public function print_return_reports($from_tanggal = '', $from_bulan = '', $from_tahun = '', $to_tanggal = '', $to_bulan = '', $to_tahun = '') {

      
         if ($from_tahun != '' || $to_tahun != '') {
            $from = $from_tahun . "-" . $from_bulan . "-" . $from_tanggal;
            $to = $to_tahun . "-" . $to_bulan . "-" . $to_tanggal;
        }else{
             $from='';
             $to='';
        }
      

        $this->load->model('reportmodel');
        
        $data['contents'] = 'report/return_reports';
        $data['title'] = $this->title;
         
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Retur'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );
        
        $data['data_return'] = $this->reportmodel->getReturnReport($from, $to)->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        
        $this->load->view('index', $data);

        
       
        $this->load->library('Pdf');
        $file_name = "assets/print_return_reports.pdf";
 
       

        $this->pdf->pdf_create($this->load->view('report/print_return_reports', $data, TRUE), $file_name, FALSE);

        header("location: http://" . $_SERVER['HTTP_HOST'] . "/dms/assets/print_return_reports.pdf");
    }

    public function view_purchase_reports($from_tanggal = '', $from_bulan = '', $from_tahun = '', $to_tanggal = '', $to_bulan = '', $to_tahun = '') {


          if ($from_tahun != '' || $to_tahun != '') {
            $from = $from_tahun . "-" . $from_bulan . "-" . $from_tanggal;
            $to = $to_tahun . "-" . $to_bulan . "-" . $to_tanggal;
        }else{
             $from='';
             $to='';
        }
       

        $this->load->model('reportmodel');
        $data['contents'] = 'report/purchase_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Pembelian'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );

        $data['data_purchase'] = $this->reportmodel->getPurchaseReport($from, $to)->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);
    }

    public function view_deposit_reports($from_tanggal = '', $from_bulan = '', $from_tahun = '', $to_tanggal = '', $to_bulan = '', $to_tahun = '') {



        if ($from_tahun != '' || $to_tahun != '') {
            $from = $from_tahun . "-" . $from_bulan . "-" . $from_tanggal;
            $to = $to_tahun . "-" . $to_bulan . "-" . $to_tanggal;
        }else{
             $from='';
             $to='';
        }


        $this->load->model('reportmodel');
        $data['contents'] = 'report/deposit_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Penitipan'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );

        $data['data_deposit'] = $this->reportmodel->getDepositReport($from, $to)->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);
    }
    
    
    public function view_return_reports($from_tanggal = '', $from_bulan = '', $from_tahun = '', $to_tanggal = '', $to_bulan = '', $to_tahun = '') {



        if ($from_tahun != '' || $to_tahun != '') {
            $from = $from_tahun . "-" . $from_bulan . "-" . $from_tanggal;
            $to = $to_tahun . "-" . $to_bulan . "-" . $to_tanggal;
        }else{
             $from='';
             $to='';
        }


        $this->load->model('reportmodel');
        $data['contents'] = 'report/return_reports';
        $data['title'] = $this->title;
        $this->breadcrumbs = array(
            'title' => array('Dashboard', 'Pembelian & Penerimaan Titipan', 'Laporan Retur'),
            'url' => array('/admin/dashboard', '/admin/test', '/admin/test')
        );

        $data['data_return'] = $this->reportmodel->getReturnReport($from, $to)->result_array();
        $data['arr_menu'] = $this->breadcrumbs;
        $this->load->view('index', $data);
    }

}

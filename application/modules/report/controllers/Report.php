<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

	
	public function purchase_reports()
	{
            $this->load->model('reportmodel');
		$data['contents'] = 'report/purchase_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Laporan Pembelian'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
                
                $data['data_purchase'] = $this->reportmodel->getPurchaseReport('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function deposit_reports()
	{
            
             $this->load->model('reportmodel');
		$data['contents'] = 'report/deposit_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Laporan Konsinyasi'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
                
                 $data['data_deposit'] = $this->reportmodel->getDepositReport('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function return_reports()
	{
            
              $this->load->model('reportmodel');
		$data['contents'] = 'report/return_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Laporan Retur'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
                
                  $data['data_return'] = $this->reportmodel->getReturnReport('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
        
        
        //ADI
        public function print_purchase_reports() {

            
              $this->load->model('reportmodel');
        $this->load->library('Pdf');
        $file_name = "assets/print_purchase_reports.pdf";
     
        $from=  $this->input->post('from');
        $to=  $this->input->post('to');
        
        echo $from;
        echo $to;
           $data['data_purchase'] = $this->reportmodel->getPurchaseReport('')->result_array();
        $data['test'] = "print_purchase_reports";

        $this->pdf->pdf_create($this->load->view('report/print_purchase_reports', $data, TRUE), $file_name, FALSE);
       
    }
    
        public function print_deposit_reports() {

        $this->load->library('Pdf');
        $file_name = "assets/print_deposit_reports.pdf";
     
        $data['test'] = "print_deposit_reports";

        $this->pdf->pdf_create($this->load->view('print_deposit_reports', $data, TRUE), $file_name, FALSE);
       
    }
    
     public function print_return_reports() {

        $this->load->library('Pdf');
        $file_name = "assets/print_return_reports.pdf";
     
        $data['test'] = "print_return_reports";

        $this->pdf->pdf_create($this->load->view('print_return_reports', $data, TRUE), $file_name, FALSE);
       
    }

		
}

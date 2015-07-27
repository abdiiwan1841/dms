<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends MY_Controller {

	// ==================================== //
	// Pembelian
	// ==================================== //
	public function index()
	{
		$data['contents'] = 'purchase/purchase';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Pembelian'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}

	public function savepurchase(){

	}

	public function loadmerk(){

	}

	public function loadwarna(){

	}

	public function loadmodel(){

	}

	public function loadpenjual(){
		
	}
	
	// =================================== //
	// End 
	// =================================== //
	
	public function deposit()
	{
		$data['contents'] = 'purchase/deposit';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Titipan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function retur()
	{
		$data['contents'] = 'purchase/retur';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Retur'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function purchase_reports()
	{
		$data['contents'] = 'purchase/purchase_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Laporan Pembelian'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function consignment_reports()
	{
		$data['contents'] = 'purchase/consignment_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Laporan Konsinyasi'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function retur_reports()
	{
		$data['contents'] = 'purchase/retur_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Laporan Retur'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
        
        
        //ADI
        public function print_reports() {

        $this->load->library('Pdf');
        $file_name = "assets/test.pdf";
      
     

    
        $data['test'] = "test";

        $this->pdf->pdf_create($this->load->view('print_purchase_reports', $data, TRUE), $file_name, FALSE);
        //$this->pdf->pdf_create($this->load->view('v_anggota/test', '', TRUE), $file_name, FALSE);
    }

		
}


<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends MY_Controller {

	// ==================================== //
	// Pembelian
	// ==================================== //
	public function index()
	{
		$this->load->model('purchasemodel');
		$data['contents'] = 'purchase/purchase';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Pembelian'),
			'url' => array('/dashboard','/purchase', '/purchase')
			);
		$data['data_purchase'] = $this->purchasemodel->getPurchase('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}

	public function add(){
		$this->load->model('purchasemodel');
		$data['contents'] = 'purchase/add';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Pembelian','Add'),
			'url' => array('/dashboard','/purchase', '/purchase','/add')
			);
		$data['data_purchase'] = $this->purchasemodel->getPurchase('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function detail($no_faktur = ''){
		$this->load->model('purchasemodel');
		$data['contents'] = 'purchase/detail';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Pembelian','Detail'),
			'url' => array('/dashboard','/purchase', '/purchase','/detail')
			);
		$data['data_purchase'] = $this->purchasemodel->getPurchase($no_faktur)->result_array();
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
		
}

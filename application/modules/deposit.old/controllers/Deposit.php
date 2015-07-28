
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends MY_Controller {

	// ==================================== //
	// Pembelian
	// ==================================== //
	public function index()
	{
		$this->load->model('depositmodel');
		$data['contents'] = 'deposit/deposit';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Penitipan'),
			'url' => array('/dashboard','/purchase', '/purchase')
			);
		$data['data_purchase'] = $this->depositmodel->getDeposit('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}

	public function add(){
		$this->load->model('depositmodel');
		$data['contents'] = 'deposit/add';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Penitipan','Add'),
			'url' => array('/dashboard','/purchase', '/purchase','/add')
			);
		$data['data_purchase'] = $this->depositmodel->getDeposit('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function detail($no_faktur = ''){
		$this->load->model('depositmodel');
		$data['contents'] = 'deposit/detail';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Pembelian','Detail'),
			'url' => array('/dashboard','/purchase', '/purchase','/detail')
			);
		$data['data_purchase'] = $this->despotimodel->getDeposit($no_faktur)->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	
	// =================================== //
	// End 
	// =================================== //
	
	

		
}

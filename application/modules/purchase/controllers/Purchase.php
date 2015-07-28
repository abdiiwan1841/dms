
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
		$data['contents'] = 'purchase/add';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Pembelian & Penerimaan Titipan','Pembelian','Add'),
			'url' => array('/dashboard','/purchase', '/purchase','/add')
			);
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
		$data['data_purchase'] = $this->purchasemodel->getPurchaseDetail($no_faktur)->result_array();
		$data['data_purchase'] = array_shift($data['data_purchase']);
		$data['data_motors'] = $this->purchasemodel->getPurchaseDetailMotor($no_faktur)->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		//print_r($data['data_purchase']);
		//echo json_encode($data['data_motors']);
		$this->load->view('index', $data);
	}
	
	public function simpanMotor(){
		$this->load->model('purchasemodel');
		
		$result = $this->purchasemodel->addMotor($_POST);
		if($result){
			$json = array(
				'id_motor' => $result,
				'no_pol' => $_POST['no_polisi'],
				'merk' => $_POST['merk'],
				'model' => $_POST['model'],
				'th_pembuatan' => $_POST['tahun_pembuatan'],
				'harga' => $_POST['harga_beli'],
				'umur' => $_POST['umur']
			);
			echo json_encode($json);
		}else{
			echo '0';	
		}
	}
	public function simpanFaktur(){
		$this->load->model('purchasemodel');
		$temp_id_motors = $_POST['id_motors'];
		$data_detail_pembelian = array();
		foreach($temp_id_motors as $idx => $id_motor){
			$data_detail_pembelian[$idx]['id_motor'] = $id_motor;
			$data_detail_pembelian[$idx]['id_pembelian'] = $_POST['no_faktur'];
		}
		unset($_POST['id_motors']);
		
		$result_pembelian = $this->purchasemodel->addPembelian($_POST);
		foreach($data_detail_pembelian as $detail_pembelian){
			$result_pembelian = $this->purchasemodel->addDetailPembelian($detail_pembelian);
		}
		if($result){
			echo '1';
		}else{
			echo '0';	
		}
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

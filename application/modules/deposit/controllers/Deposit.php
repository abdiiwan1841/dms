
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends MY_Controller {

	// ==================================== //
	// Penitipan
	// ==================================== //
	public function index()
	{
		$this->load->model('depositmodel');
		$data['contents'] = 'deposit/deposit';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penitipan & Penerimaan Titipan','Penitipan'),
			'url' => array('/dashboard','/deposit', '/deposit')
			);
		$data['data_deposit'] = $this->depositmodel->getDeposit('')->result_array();
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}

	public function add(){
		$this->load->model('depositmodel');
		$data['contents'] = 'deposit/add';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penitipan & Penerimaan Titipan','Penitipan','Add'),
			'url' => array('/dashboard','/deposit', '/deposit','/add')
			);
			
		
		
		$data_penjual = $this->depositmodel->getDataPenjual()->result_array();
		$data_pegawai = $this->depositmodel->getDataPegawai()->result_array();
		$temp_penjuals = array();
		foreach($data_penjual as $penjual){
			$temp_penjuals[$penjual['id']] = $penjual['nama_suplier'];
		}
		
		$temp_pegawai = array();
		foreach($data_pegawai as $pegawai){
			$temp_pegawai[$pegawai['id']] = $pegawai['nama'];
		}
		$data['data_penjual'] = $temp_penjuals;
		$data['data_pegawai'] = $temp_pegawai;
		$data['arr_menu'] = $this->breadcrumbs;
		$data['no_faktur'] = self::_generate_no_faktur();
		$this->load->view('index', $data);
	}
	
	public function detail($no_faktur = ''){
		$this->load->model('depositmodel');
		$data['contents'] = 'deposit/detail';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penitipan & Penerimaan Titipan','Penitipan','Detail'),
			'url' => array('/dashboard','/deposit', '/deposit','/detail')
			);
		$data['data_deposit'] = $this->depositmodel->getDepositDetail($no_faktur)->result_array();
		$data['data_deposit'] = array_shift($data['data_deposit']);
		$data['data_motors'] = $this->depositmodel->getDepositDetailMotor($no_faktur)->result_array();
		
		$data['arr_menu'] = $this->breadcrumbs;
		
		$data_penjual = $this->depositmodel->getDataPenjual()->result_array();
		$data_pegawai = $this->depositmodel->getDataPegawai()->result_array();
		$temp_penjuals = array();
		foreach($data_penjual as $penjual){
			$temp_penjuals[$penjual['id']] = $penjual['nama_suplier'];
		}
		
		$temp_pegawai = array();
		foreach($data_pegawai as $pegawai){
			$temp_pegawai[$pegawai['id']] = $pegawai['nama'];
		}
		$data['data_penjual'] = $temp_penjuals;
		$data['data_pegawai'] = $temp_pegawai;
		$this->load->view('index', $data);
	}
	
	public function simpanMotor(){
		$this->load->model('depositmodel');
		
		$result = $this->depositmodel->addMotor($_POST);
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
		$this->load->model('depositmodel');
		$temp_id_motors = $_POST['id_motors'];
		$data_detail_penitipan = array();
		
		unset($_POST['id_motors']);
		unset($_POST['total']);
		$result_penitipan = $this->depositmodel->addPenitipan($_POST);
		
		foreach($temp_id_motors as $idx => $id_motor){
			$data_detail_penitipan[$idx]['id_motor'] = $id_motor;
			$data_detail_penitipan[$idx]['id_penitipan'] = $result_penitipan;
		}
		
		foreach($data_detail_penitipan as $detail_penitipan){
			$result_penitipan = $this->depositmodel->addDetailPenitipan($detail_penitipan);
		}
		if($result_penitipan){
			echo '1';
		}else{
			echo '0';	
		}
	}
	
	public function ubahFaktur(){
		$this->load->model('depositmodel');
		$where['no_faktur'] = $_POST['no_faktur'];
		unset($_POST['no_faktur']);
		unset($_POST['total']);
		$_POST['bayar'] = str_replace('.','',$_POST['bayar']);
		$result = $this->depositmodel->ubahFaktur($where, $_POST);
		if($result){
			echo '1';
		}else{
			echo '0';	
		}
		redirect('deposit/detail/'.$where['no_faktur']);
	}

	public function loadmerk(){

	}

	public function loadwarna(){

	}

	public function loadmodel(){

	}

	public function loadpenjual(){
		
	}
	
	private function _generate_no_faktur(){
		$this->load->model('depositmodel');
		$data_deposit = $this->depositmodel->getDepositLastData()->row();
		if($data_deposit){
			$lastID = ($data_deposit->id+1);
		}else{
			$lastID = 1;
		}
		
		$prefix = 'P';
		$no_faktur = $prefix.$lastID;
		return $no_faktur;
	}
	
	private function _check_no_faktur($no_faktur){
		$result = false;
		$isAvailable = $this->depositmodel->getDeposit($no_faktur)->result_array();
		if($isAvailable){
			$result = true;
		}
		return $result;
	}
}

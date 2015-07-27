<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends MY_Controller {

	public function index()
	{
		$data['contents'] = 'sales/purchase';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penjualan & Penitipan','Penjualan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function deposit()
	{
		$data['contents'] = 'sales/deposit';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penjualan & Penitipan','Titipan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function retur()
	{
		$data['contents'] = 'sales/retur';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penjualan & Penitipan','Retur'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function sales_reports()
	{
		$data['contents'] = 'sales/sales_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penjualan & Penitipan','Laporan Penjualan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function consignment_reports()
	{
		$data['contents'] = 'sales/consignment_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penjualan & Penitipan','Laporan Konsinyasi'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	public function retur_reports()
	{
		$data['contents'] = 'sales/retur_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Penjualan & Penitipan','Laporan Retur'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
}

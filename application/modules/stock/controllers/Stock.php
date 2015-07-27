<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends MY_Controller {

	public function index()
	{
		$data['contents'] = 'stock/stock_list';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Stock','Stock'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function stock_reports()
	{
		$data['contents'] = 'stock/stock_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Stock','Laporan Stock'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cash extends MY_Controller {

	public function index()
	{
		$data['contents'] = 'cash/cash_list';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Dana Tunai','Dana Tunai'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function cash_reports()
	{
		$data['contents'] = 'cash/cash_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Dana Tunai','Laporan Dana Tunai'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Repair extends MY_Controller {

	public function index()
	{
		$data['contents'] = 'repair/repair';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Perbaikan','Perbaikan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function repair_reports()
	{
		$data['contents'] = 'repair/repair_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Perbaikan','Laporan Perbaikan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
}

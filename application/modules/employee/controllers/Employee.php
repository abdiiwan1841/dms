<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {

	public function index()
	{
		$data['contents'] = 'employee/employee_list';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Karyawan','Karyawan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function employee_outcome()
	{
		$data['contents'] = 'employee/employee_outcome';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Karyawan','Laporan Karyawan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function employee_reports()
	{
		$data['contents'] = 'employee/employee_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Karyawan','Laporan Karyawan'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function index()
	{
		$this->breadcrumbs = array(
			'title' => 'Dashboard'
			);
		$this->load->view('login_admin', $this->breadcrumbs);
	}
	
	public function dashboard()
	{
		$data['contents'] = 'dashboard';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard'),
			'url' => array('/admin/dashboard')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('admin/index', $data);
	}
	
	public function dealer()
	{
		$data['contents'] = 'dealer_list';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Manajemen Dealer','Dealer'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('admin/index', $data);
	}
	
	public function lock()
	{
		$data['title'] = $this->title;
		$this->load->view('lock_screen', $data);
	}

}

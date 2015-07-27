<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$data['contents'] = 'dashboard';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard'),
			'url' => array('/admin/dashboard')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function lock()
	{
		$data['title'] = $this->title;
		$this->load->view('lock_screen', $data);
	}
	
	public function mac_test()
	{
		ob_start(); // Turn on output buffering
		system('ipconfig/all'); //Execute external program to display output
		$mycom=ob_get_contents(); // Capture the output into a variable
		ob_clean(); // Clean (erase) the output buffer
		$media_state = "Media State";
		$findme = "Physical";
		$pmac = strpos($mycom, $findme); // Find the position of Physical text
		$mac=substr($mycom,($pmac+36),17); // Get Physical Address

		echo $mac;
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	
	public function error()
	{
		$this->load->view('404');
	}
}

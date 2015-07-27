<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	private $user = 'adira';
	private $pass = 'adira';
	public function index()
	{
		$this->load->library('session');
		if($this->input->post('user') == $this->user && $this->input->post('pass') == $this->pass){
			redirect('dashboard');	
		}else{
			$this->session->set_flashdata('note', '<pre>Invalid User ID or Password</pre>');
			redirect('');
		}
	}
}

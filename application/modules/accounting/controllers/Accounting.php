<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Accounting extends MY_Controller {

	public function index()
	{
		
	}
	
	public function general_ledger_post()
	{
		$data['contents'] = 'accounting/general_ledger_post';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Accounting','Posting GL'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function list_of_transactions()
	{
		$data['contents'] = 'accounting/list_of_transactions';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Accounting','List Transaksi'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function profit_loss_reports()
	{
		$data['contents'] = 'accounting/profit_loss_reports';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Accounting','Laporan Neraca & Laba Rugi'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
	public function beginning_balance()
	{
		$data['contents'] = 'accounting/beginning_balance';
		$data['title'] = $this->title;
		$this->breadcrumbs = array(
			'title' => array('Dashboard','Accounting','Saldo Awal'),
			'url' => array('/admin/dashboard','/admin/test', '/admin/test')
			);
		$data['arr_menu'] = $this->breadcrumbs;
		$this->load->view('index', $data);
	}
	
}

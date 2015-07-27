<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseModel extends CI_Model {

	public function getPurchase($where = ''){
		return $this->db->get('dms_pembelian');
	}
		
}

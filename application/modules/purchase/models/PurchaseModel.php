<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseModel extends CI_Model {

	public function getPurchase($where = ''){
		//return $this->db->get('dms_pembelian');
		return $this->db->query("SELECT id, no_faktur, tanggal, no_surat_jalan, (select nama from dms_pegawai where id = id_pegawai) nama_pegawai, (select nama_suplier from dms_supplier where id = id_supplier) nama_supplier, keterangan, (select count(id_pembelian) from dms_details_pembelian where id_pembelian = dms_pembelian.id) jumlah_unit, (select sum((select harga_beli from dms_motor where id = id_motor)) from dms_details_pembelian where id_pembelian = dms_pembelian.id) total, bayar, (((select sum((select harga_beli from dms_motor where id = id_motor)) from dms_details_pembelian where id_pembelian = dms_pembelian.id))-bayar) sisa FROM dms_pembelian");
	}
		
}

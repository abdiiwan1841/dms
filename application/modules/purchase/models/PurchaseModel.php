<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseModel extends CI_Model {

	public function getPurchase($where = ''){
		//return $this->db->get('dms_pembelian');
		if($where != ''){
			$where = " WHERE no_faktur = '".$where."'";	
		}
		return $this->db->query("SELECT id, no_faktur, tanggal, no_surat_jalan, (select nama from dms_pegawai where id = id_pegawai) nama_pegawai, (select nama_suplier from dms_supplier where id = id_supplier) nama_supplier, keterangan, (select count(id_pembelian) from dms_details_pembelian where id_pembelian = dms_pembelian.id) jumlah_unit, (select sum((select harga_beli from dms_motor where id = id_motor)) from dms_details_pembelian where id_pembelian = dms_pembelian.id) total, bayar, (((select sum((select harga_beli from dms_motor where id = id_motor)) from dms_details_pembelian where id_pembelian = dms_pembelian.id))-bayar) sisa FROM dms_pembelian".$where);
	}
	
	
	public function getPurchaseDetail($where = ''){
		//return $this->db->get('dms_pembelian');
		if($where != ''){
			$where = " WHERE p.no_faktur = '".$where."'";	
		}
		return $this->db->query("SELECT p.no_faktur, s.nama_suplier, DATE_FORMAT(p.tanggal,'%e %M %Y') tanggal, REPLACE(REPLACE(REPLACE(FORMAT((select sum((select harga_beli from dms_motor where id = dp.id_motor)) from dms_details_pembelian dp where id_pembelian = dp.id), 0), '.', '|'), ',', '.'), '|', ',') total, REPLACE(REPLACE(REPLACE(FORMAT(bayar, 0), '.', '|'), ',', '.'), '|', ',') bayar, pe.nama FROM dms_pembelian p inner join dms_supplier s on p.id_supplier = s.id inner join dms_pegawai pe on pe.id = p.id_pegawai ".$where);
	}
	
	public function getPurchaseDetailMotor($where = ''){
		//return $this->db->get('dms_pembelian');
		if($where != ''){
			$where = " WHERE p.no_faktur = '".$where."'";	
		}
		return $this->db->query("SELECT m.no_polisi, m.merk, m.model, DATE_FORMAT(m.tahun_pembuatan,'%e %M %Y') tahun_pembuatan, REPLACE(REPLACE(REPLACE(FORMAT(m.harga_beli, 0), '.', '|'), ',', '.'), '|', ',') harga_beli, m.umur FROM dms_pembelian p inner join dms_details_pembelian dp on p.id = dp.id_pembelian inner join dms_motor m on m.id = dp.id_motor".$where);
	}
	
	
	public function addMotor($data){
		$this->db->insert('dms_motor',$data);
		return $this->db->insert_id();
	}
	public function addPembelian($data){
		$this->db->insert('dms_pembelian',$data);
		return $this->db->insert_id();
	}
	public function addDetailPembelian($data){
		$this->db->insert('dms_details_pembelian',$data);
		return $this->db->insert_id();
	}
	
	public function ubahFaktur($where,$data){
		$this->db->where($where);
		return $this->db->update('dms_pembelian', $data); 
	}
	
	public function getDataPenjual(){
		return $this->db->get('dms_supplier');
	}
	
	public function getDataPegawai(){
		return $this->db->get('dms_pegawai');
	}
	
	public function getPurchaseLastData(){
		$this->db->limit(1);
		$this->db->select('id');
		$this->db->order_by('id','DESC');
		return $this->db->get('dms_pembelian');
	}
		
}

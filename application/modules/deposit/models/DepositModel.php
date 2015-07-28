<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DepositModel extends CI_Model {

	public function getDeposit($where = ''){
		//return $this->db->get('dms_pembelian');
		if($where != ''){
			$where = " WHERE no_faktur = '".$where."'";	
		}
		return $this->db->query("SELECT id, no_faktur, tanggal, no_surat_jalan, (select nama from dms_pegawai where id = id_pegawai) nama_pegawai, (select nama_suplier from dms_supplier where id = id_supplier) nama_supplier, keterangan, (select count(id_penitipan) from dms_details_penitipan where id_penitipan = dms_penitipan.id) jumlah_unit, (select sum((select harga_beli from dms_motor where id = id_motor)) from dms_details_penitipan where id_penitipan = dms_penitipan.id) total, bayar, (((select sum((select harga_beli from dms_motor where id = id_motor)) from dms_details_penitipan where id_penitipan = dms_penitipan.id))-bayar) sisa FROM dms_penitipan".$where);
	}
	
	
	public function getDepositDetail($where = ''){
		//return $this->db->get('dms_pembelian');
		if($where != ''){
			$where = " WHERE p.no_faktur = '".$where."'";	
		}
		return $this->db->query("SELECT p.no_faktur, s.nama_suplier, DATE_FORMAT(p.tanggal,'%e %M %Y') tanggal, REPLACE(REPLACE(REPLACE(FORMAT((select sum((select harga_beli from dms_motor where id = dp.id_motor)) from dms_details_penitipan dp where id_penitipan = dp.id), 0), '.', '|'), ',', '.'), '|', ',') total, REPLACE(REPLACE(REPLACE(FORMAT(bayar, 0), '.', '|'), ',', '.'), '|', ',') bayar, pe.nama FROM dms_penitipan p inner join dms_supplier s on p.id_supplier = s.id inner join dms_pegawai pe on pe.id = p.id_pegawai".$where);
	}
	
	public function getDepositDetailMotor($where = ''){
		//return $this->db->get('dms_pembelian');
		if($where != ''){
			$where = " WHERE p.no_faktur = '".$where."'";	
		}
		return $this->db->query("SELECT m.no_polisi, m.merk, m.model, DATE_FORMAT(m.tahun_pembuatan,'%e %M %Y') tahun_pembuatan, REPLACE(REPLACE(REPLACE(FORMAT(m.harga_beli, 0), '.', '|'), ',', '.'), '|', ',') harga_beli, m.umur FROM dms_penitipan p inner join dms_details_penitipan dp on p.id = dp.id_penitipan inner join dms_motor m on m.id = dp.id_motor".$where);
	}
	
	
	public function addMotor($data){
		$this->db->insert('dms_motor',$data);
		return $this->db->insert_id();
	}
	public function addPenitipan($data){
		$this->db->insert('dms_penitipan',$data);
		return $this->db->insert_id();
	}
	public function addDetailPenitipan($data){
		$this->db->insert('dms_details_penitipan',$data);
		return $this->db->insert_id();
	}
	
	public function ubahFaktur($where,$data){
		$this->db->where($where);
		return $this->db->update('dms_penitipan', $data); 
	}
	
	public function getDataPenjual(){
		return $this->db->get('dms_supplier');
	}
	
	public function getDataPegawai(){
		return $this->db->get('dms_pegawai');
	}
	
	public function getDepositLastData(){
		$this->db->limit(1);
		$this->db->select('id');
		$this->db->order_by('id','DESC');
		return $this->db->get('dms_penitipan');
	}
		
}

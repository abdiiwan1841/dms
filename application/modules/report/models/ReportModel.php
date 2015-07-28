<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model {

	public function getPurchaseReport($where = ''){
		return $this->db->query("SELECT p.no_faktur, DATE_FORMAT(p.tanggal,'%e %M %Y') tanggal, m.no_polisi, m.merk, m.model, m.isi_silinder, DATE_FORMAT(m.tahun_pembuatan,'%e %M %Y') tahun_pembuatan, REPLACE(REPLACE(REPLACE(FORMAT(m.harga_beli, 0), '.', '|'), ',', '.'), '|', ',') harga_beli from dms_details_pembelian dp inner join dms_pembelian p on dp.id_pembelian = p.id inner join dms_motor m on m.id = dp.id_motor inner join dms_supplier s on s.id = p.id_supplier");
	}
        
        public function getDepositReport($where = ''){
		return $this->db->query("SELECT p.no_faktur, DATE_FORMAT(p.tanggal,'%e %M %Y') tanggal, m.no_polisi, m.merk, m.model, m.isi_silinder, DATE_FORMAT(m.tahun_pembuatan,'%e %M %Y') tahun_pembuatan, REPLACE(REPLACE(REPLACE(FORMAT(m.harga_beli, 0), '.', '|'), ',', '.'), '|', ',') harga_beli from dms_details_penitipan dp inner join dms_penitipan p on dp.id_penitipan = p.id inner join dms_motor m on m.id = dp.id_motor inner join dms_supplier s on s.id = p.id_supplier");
	}
        
        public function getReturnReport($where = ''){
		return $this->db->query("SELECT r.no_faktur, DATE_FORMAT(r.tanggal,'%e %M %Y') tanggal, s.nama_suplier, m.no_polisi, m.merk, m.model, m.isi_silinder, DATE_FORMAT(m.tahun_pembuatan,'%e %M %Y') tahun_pembuatan, REPLACE(REPLACE(REPLACE(FORMAT(m.harga_beli, 0), '.', '|'), ',', '.'), '|', ',') harga_beli, r.keterangan FROM dms_retur r inner join dms_pegawai p on r.id_pegawai = p.id inner join dms_motor m on m.id = r.id_motor inner join dms_supplier s on s.id = r.id_supplier");
	}
		
}

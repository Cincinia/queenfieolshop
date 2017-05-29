<?php 
	
	class TableModel extends CI_Model
	{
		
		function getData(){
		$query = $this->db->get('barang');
		return $query->result_array();
		}

		function getDataWhere($kodebarang){
		$this->db->select('*');
		$this->db->where('kode_barang', $kodebarang);
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
		}

		function getAkun(){
		$this->db->select('*');
		$this->db->where('role = 0');
		$this->db->from('akun');
		$query = $this->db->get();
		return $query->result_array();
		}

		function getPesanan(){
		$query = $this->db->get('pemesanan');
		return $query->result_array();

		}

		function getTestimoni(){
		$query = $this->db->get('testimoni');
		return $query->result_array();
		}

		function updatestatus($kodepesan, $status, $jumlah, $kodebarang){
		$this->db->set('status', $status);
		$this->db->where('kode_pemesanan', $kodepesan);
		$this->db->update('pemesanan');

		$this->db->set('jumlah', $jumlah);
		$this->db->where('kode_barang', $kodebarang);
		$this->db->update('barang');
		}

	}
 ?>
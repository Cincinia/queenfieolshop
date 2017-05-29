<?php 
/**
* 
*/
class BarangModel extends CI_Model
{

	function getData(){
		$query = $this->db->get('barang');
		return $query->result_array();
	}

	function addData($data) {
		$this->db->insert('barang', $data);
	}

	
	function deleteData($kode){
		return $this->db->delete('barang', array('kode_barang'=>$kode));
	}

	function updateData($kode, $data){
		/*$this->db->set('kode_barang', $data['kode_barang']);
		$this->db->set('nama_barang', $data['nama_barang']);*/
		$this->db->where('kode_barang', $kode);
		$this->db->update('barang', $data);
	}



}

 ?>
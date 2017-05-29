<?php 
/**
* 
*/
class PromoModel extends CI_Model
{
	
	function getPromo(){
		$query = $this->db->get('promo');
		return $query->result_array();
	}

	function addPromo($data) {
		$this->db->insert('promo', $data);
	}


	function updatePromo($kode, $data){
		/*$this->db->set('kode_barang', $data['kode_barang']);
		$this->db->set('nama_barang', $data['nama_barang']);*/
		$this->db->where('kodepromo', $kode);
		$this->db->update('promo', $data);
	}


	function deleteData($kode){
		return $this->db->delete('promo', array('kodepromo'=>$kode));
	}
}
 ?>
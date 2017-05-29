<?php 
/**
* 
*/
class AdminModel extends CI_Model
{

	function getTesti(){
		$this->db->select('*');
		$this->db->where('verified', 0);
		$this->db->from('testimoni');
		$query = $this->db->get();

		$jumlah = $query->num_rows();
		return $jumlah;
	}

	function getAcc(){
		$this->db->select('*');
		$this->db->where('role', 0);
		$this->db->from('akun');
		$query = $this->db->get();

		$jumlah = $query->num_rows();
		return $jumlah;
	}

	function getHabis(){
		$this->db->select('*');
		$this->db->where('jumlah', 0);
		$this->db->from('barang');
		$query = $this->db->get();

		$jumlah = $query->num_rows();
		return $jumlah;
	}
}
 ?>
<?php 
/**
* 
*/
class TestiModel extends CI_Model
{
	function getTestimoni(){
		$query = $this->db->get('testimoni');
		return $query->result_array();
	}

	function updateStatus($email, $timestamp){
		$this->db->set('verified', 1);
		$this->db->where('email', $email);
		$this->db->where('timestamp', $timestamp);
		$this->db->update('testimoni');
	}

	function deleteTesti($email, $timestamp){
		$this->db->where_in('email', $email);
		$this->db->where_in('timestamp', $timestamp);
		$this->db->delete('testimoni');
	}
	
}

 ?>
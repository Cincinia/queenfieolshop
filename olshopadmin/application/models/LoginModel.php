<?php
class LoginModel extends CI_Model {


	function login_authen($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); 
		$this->db->where('role = 1');
		$this->db->from('akun');
		$query = $this->db->get();
		return $query;
	}



}
?>
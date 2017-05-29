<?php
class My_Model extends CI_Model {

	function getData() {
		$query = $this->db->get('barang');
		return $query->result_array();
	}
	function addData($data) {
		$this->db->insert('barang', $data);
	}

	function login_authen($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); //ngecek apakah passwordnya ada di database
		$this->db->from('akun'); //dicocokkan dengan tabel user
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function authen_user($username)
	{
		$this->db->select('authentication');
		$this->db->where('username', $username);
		$this->db->from('akun');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	function wrong_password($username, $value) //untuk mengupdate nilai authentication soalnya kan kalo udah 4kali gagal login, akun dia bakalan terblock nah jadi fungsi ini berfungi untuk mengupdate nilai authentication 
	{ 
		$this->db->set('authentication', $value);
		$this->db->where("username", $username);
		$this->db->update('akun');
	}

	function delete_item($item)
	{
		$this->db->where_in('kode_barang', $item);
		$this->db->delete('barang');
	}
}
?>
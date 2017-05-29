<?php 
class LoginController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('LoginModel');
	}
	
	function index() {
		$this->load->view('login');
	}
	
	
	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$isLogin = $this->LoginModel->login_authen($username, $password);

		if ($isLogin->num_rows() > 0) {
			$data_session = array(
							'username' => $username,
							'status' => "login");
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/Admin"));
		}
		else{
			echo "username dan password salah";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/LoginController'));
	}

}
?>
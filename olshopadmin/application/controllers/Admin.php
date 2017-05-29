<?php 

class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
		redirect(base_url("index.php/LoginController"));
		}
		$this->load->model('AdminModel');

	}

	function index(){
		$newtesti = $this->AdminModel->getTesti();
		$newacc = $this->AdminModel->getAcc();
		$baranghabis = $this->AdminModel->getHabis();
		$this->load->view('body', array( 'newtesti'=>$newtesti,
										'newacc'=>$newacc, 'baranghabis'=>$baranghabis));
	}
}

 ?>
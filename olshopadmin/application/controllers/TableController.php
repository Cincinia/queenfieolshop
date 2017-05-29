<?php 
	
	class TableController extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/LoginController"));
			}

			$this->load->model('TableModel');
		}


		function index(){
		$akun = $this->TableModel->getAkun();
		$this->load->view('table', array(
										'akun' => $akun, ));
		}



	}

 ?>
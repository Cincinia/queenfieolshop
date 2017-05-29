<?php 
/**
* 
*/
class TestiController extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('TestiModel');
	}

	function index(){
		$testi = $this->TestiModel->getTestimoni();
		$this->load->view('testi', array('testi' =>$testi));
	}

	function update($timestamp){
		$time = substr($timestamp, 0, 10);
		$times = substr($timestamp, -8);
		$waktu = $time . " ". $times;
		$email = $this->input->post('email');
		$this->TestiModel->updateStatus($email, $waktu);
		$this->index();
	}

	function delete($timestamp){
		$time = substr($timestamp, 0, 10);
		$times = substr($timestamp, -8);
		$waktu = $time . " ". $times;
		$email = $this->input->post('email');
		$this->TestiModel->deleteTesti($email, $waktu);
		$this->index();
	}

}
 ?>
<?php 

/**
* 
*/
class PromoController extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('PromoModel');
	}

	function index(){
		$data = $this->PromoModel->getPromo();
		$this->load->view('promo', array('data' => $data));
	}

	function create(){
		$img = $this->upload->data();
		$data = array(
			
			'kodepromo' => $this->input->post('kodepromo'),
			'judul' => $this->input->post('judul'),
			'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
			'deskripsi_lengkap' => $this->input->post('deskripsi_lengkap'),
			'addedBy' => $this->session->userdata('username')
		);
		$this->PromoModel->addPromo($data);
		$this->index();
	}

	 public function addPromo()
        {
                $config['upload_path']          = './../img/promo/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 100000000;
                $config['file_name']				= $this->input->post('kodepromo');

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('img'))
                {
                	echo $this->upload->display_errors();
                        echo "gagal he";
                }
                else
                {
                		$this->create();
                }
        }

        public function update($kode)
        {
                $config['upload_path']          = './../img/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 100000000;
                $config['file_name']			= $kode.'.jpg';
                $config['overwrite']			= TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload("img".$kode))
                {

                	$eror = $this->upload->data();
                	if ($eror['file_size'] != "") {
        
                			print_r($this->upload->data());

                	}
                	else{
                		 $this->updatePromo($kode);
                		}
                	
                }
                else
                {
                		
                		$this->updatePromo($kode);
                }
        }
 		public function updatePromo($kode){
 			$data = array(
			
			'kodepromo' => $this->input->post('kodepromo'),
			'judul' => $this->input->post('judul'),
			'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
			'deskripsi_lengkap' => $this->input->post('deskripsi_lengkap'),
			'addedBy' => $this->session->userdata('username')
		);
 			$this->PromoModel->updatePromo($kode, $data);
 			$this->index();
 		}

 		   public function delete($kode){
 			$this->PromoModel->deleteData($kode);
 			$this->index();
 		}
}

 ?>
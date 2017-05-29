<?php 

/**
* 
*/
class BarangController extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		if ($this->session->userdata('status') != "login") {
		redirect(base_url("index.php/LoginController"));
		}

		$this->load->model('BarangModel');
	}

	function index(){
		$data = $this->BarangModel->getData();
		$this->load->view('barang', array('data' =>$data));
		}

	function create() {
		$img = $this->upload->data();
		$data = array(
			
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'warna' => $this->input->post('warna'),
			'jumlah' => $this->input->post('jumlah'),
			'deskripsi' => $this->input->post('deskripsi'),
            'bahan' => $this->input->post('bahan'),
            'kalimatpromosi'=> $this->input->post('kalimatpromosi'),
            'custom'=> $this->input->post('custom'),
			'kategori' => $this->input->post('kategori'),
			'harga' => $this->input->post('harga'),
			'addedBy' => $this->session->userdata('username')
		);
		$this->BarangModel->addData($data);
		$this->index();
	}

	 public function addBarang()
        {
                $config['upload_path']          = './../img/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 100000000;
                $config['file_name']			= $this->input->post('kode_barang').'.jpg';
                $config['overwrite']			= TRUE;

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

   public function delete($kode){
 			$this->BarangModel->deleteData($kode);
 			$this->index();
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
                		 $this->updateBarang($kode);
                		}
                	
                }
                else
                {
                		
                		$this->updateBarang($kode);
                }
        }
 		public function updateBarang($kode){
 			$data = array(
			
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'warna' => $this->input->post('warna'),
			'jumlah' => $this->input->post('jumlah'),
			'deskripsi' => $this->input->post('deskripsi'),
            'bahan' => $this->input->post('bahan'),
            'kalimatpromosi'=> $this->input->post('kalimatpromosi'),
            'custom' =>$this->input->post('custom'),
			'kategori' => $this->input->post('kategori'),
			'addedBy' => $this->session->userdata('username')
		);
 			$this->BarangModel->updateData($kode, $data);
 			$this->index();
 		}
}

 ?>
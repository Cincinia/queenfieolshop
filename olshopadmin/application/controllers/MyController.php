<?php 
class MyController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
	}
	
	function index() {
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}
	
	function create() {
		$img = $this->upload->data();
			$gambar = $img['file_name'];
		$data = array(
			
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'satuan' => $this->input->post('satuan'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori'),
			'gambar' => $gambar
		);
		$this->My_Model->addData($data);
		//$this->index();
	}
	
	function readData() 
	{
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data'=> $data));
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$isLogin = $this->My_Model->login_authen($username, $password);

		$i = $this->My_Model->authen_user($username);
		if ($isLogin == true && $i[0]['authentication'] < 3) 
		{
			$this->home();
		}
		else
		{
			if ($i[0]['authentication'] < 3) 
		{
			$update = $this->My_Model->wrong_password($username, $i[0]['authentication']+1);
			$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
			$this->load->view('login', $data);
		}
		else
		{
			$data['err_message'] = "AKUN ANDA TERBLOCK";
			$this->load->view('login', $data);
		}
		}
	}

	function delete_barang()
	{
		$delete = $this->input->post('barang');
		$this->My_Model->delete_item($delete);
		$this->readData();
	}

	function home()
	{
		$this->load->view('body');
	}


        public function do_upload()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 1000;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                	echo $this->upload->display_errors();
                        echo "gagal he";
                }
                else
                {
                		$this->create();
                        $this->home();
                }
        }
}
?>
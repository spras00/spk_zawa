<?php 
 
 
class Rumah extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->model('Model_Rumah'); 
	}

	function index()
	{
		$data['title'] = 'Data Rumah';
		$data['rumah'] = $this->Model_Rumah->tampil_data();
		$this->load->view('header', $data);
		$this->load->view('view_rumah', $data);
		$this->load->view('footer');
	}

	function input()
	{
		$this->load->library('form_validation');

		$data['title'] = 'Input Data Rumah';

		$this->form_validation->set_rules('nm_a', 'NAMA RUMAH', 'required');
		$this->form_validation->set_rules('lokasi', 'LOKASI', 'required');
		$this->form_validation->set_rules('harga', 'HARGA', 'trim|required');
		$this->form_validation->set_rules('luas', 'LUAS', 'trim|required');
		$this->form_validation->set_rules('tipe', 'TIPE KAMAR TIDUR', 'trim|required');
		$this->form_validation->set_rules('fasilitas', 'FASILTIAS', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('input_rumah',$data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Rumah->buat();
			redirect('rumah');
		}
	}

	function delete($id_a)
	{
		$id_a = $this->uri->segment(3);
		if (empty($id_a))
        {
            show_404();
        }

		$data['rumah'] = $this->Model_Rumah->bacaid($id_a);
		$this->Model_Rumah->hapus($id_a);
		redirect('rumah');
	}

	function edit($id_a)
	{
		$id_a = $this->uri->segment(3);
		if (empty($id_a))
        {
            show_404();
        }

        $data['title'] = 'Ubah Data Rumah';
		$data['rumah'] = $this->Model_Rumah->bacaid($id_a);

		$this->form_validation->set_rules('nm_a', 'NAMA RUMAH', 'required');
		$this->form_validation->set_rules('lokasi', 'LOKASI', 'required');
		$this->form_validation->set_rules('harga', 'HARGA', 'trim|required');
		$this->form_validation->set_rules('luas', 'LUAS', 'trim|required');
		$this->form_validation->set_rules('tipe', 'TIPE KAMAR TIDUR', 'trim|required');
		$this->form_validation->set_rules('fasilitas', 'FASILTIAS', 'trim|required');
		
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('edit_rumah',$data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Rumah->buat($id_a);
			redirect('rumah');
		}
	}
}

 
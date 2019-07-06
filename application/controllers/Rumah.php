<?php 
 
 
class Rumah extends CI_Controller{
 
	function __construct()
	{
		parent::__construct();
		 if (! $this->session->userdata('username'))
        {
            redirect('login');
        }
		$this->load->library('form_validation');		
		$this->load->model('Model_Rumah');
	}

	function index()

	{
		$config['base_url'] = base_url().'rumah/index';
		$config['uri_segement'] = 3;
		$config['total_rows'] = $this->Model_Rumah->row();
		$config['per_page'] = '5';
		
		//style

		$config['first_link'] = 'First Page';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';


		$config['next_link'] = 'Next Page';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['last_link'] = 'Last Page';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = 'Prev Page';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$this->pagination->initialize($config);
		$page = $this->uri->segment(3,0);


		$data['title'] = 'Data Rumah';
		$data['hal'] = $this->pagination->create_links();
		$data['rumah'] = $this->Model_Rumah->isipage($config['per_page'], $page);
		$this->load->view('header', $data);
		$this->load->view('view_rumah', $data);
		$this->load->view('footer');
	}

	function input()

	{
		$this->load->library('form_validation');

		$data['title'] = 'Input Data Rumah';

		$this->form_validation->set_rules('id_a', 'ID RUMAH', 'required');
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
			$this->Model_Rumah->buat($id_a);
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
		
		$this->form_validation->set_rules('id_a', 'ID RUMAH', 'required');
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
			$this->Model_Rumah->ubah($id_a);
			redirect('rumah');
		}
	}

}
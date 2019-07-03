<?php


Class Crips extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		if (! $this->session->userdata('username'))
        {
            redirect('login');
        }
		$this->load->library('form_validation');		
		$this->load->model('Model_Crips'); 
	}


	function index()
	{
		$config['base_url'] = base_url().'crips/index';
		$config['uri_segement'] = 3;
		$config['total_rows'] = $this->Model_Crips->row();
		$config['per_page'] = '10';
		
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

		$data['title'] = ' Nilai Crips Kriteria';
		$data['hal'] = $this->pagination->create_links();
		$data['rows'] = $this->Model_Crips->isipage($config['per_page'], $page);
		$this->load->view('header', $data);
		$this->load->view('view_crips', $data);
		$this->load->view('footer');
	}

	function input()
	{
		$data['title'] = 'Input Data Crips';
		$data['rows'] = $this->Model_Crips->kriteria();

		$this->form_validation->set_rules('id_k', 'NAMA KRITERIA', 'trim|required');
		$this->form_validation->set_rules('id_cp', 'ID CRIPS', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nm_cp', 'NAMA CRIPS', 'trim|required');
		$this->form_validation->set_rules('skor', 'SKOR', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('input_crips',$data);
			$this->load->view('footer');
		}else
		{
			$this->Model_Crips->buat();
			redirect('crips');
		}
	}

	function delete($id_cp)
	{
		$id_cp = $this->uri->segment(3);
		if (empty($id_cp))
        {
            show_404();
        }

		$data['kriteria'] = $this->Model_Crips->bacaid($id_cp);
		$this->Model_Crips->hapus($id_cp);
		redirect('crips');
	}

	function edit($id_cp)
	{
		$id_cp = $this->uri->segment(3);
		if (empty($id_cp))
        {
            show_404();
        }

        $data['title'] = 'Ubah Data Crips';
		$data['crips'] = $this->Model_Crips->bacaid($id_cp);
		$id_k = $this->input->post('id_k');

        $this->form_validation->set_rules('id_k', 'NAMA KRITERIA', 'trim|required');
		$this->form_validation->set_rules('id_cp', 'ID CRIPS', 'trim|required');
		$this->form_validation->set_rules('nm_cp', 'NAMA CRIPS', 'trim|required');
		$this->form_validation->set_rules('skor', 'SKOR', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('edit_crips',$data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Crips->buat($id_cp);
			redirect('crips');
		}
	}

}
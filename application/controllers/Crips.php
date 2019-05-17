<?php


Class Crips extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->model('Model_Crips'); 
	}

	function index(){
		$data['title'] = 'Himpunan Kriteria';
		$data['crips'] = $this->Model_Crips->tampil_data();
		$this->load->view('header', $data);
		$this->load->view('view_crips', $data);
		$this->load->view('footer');
	}

	function input(){

		$this->load->library('form_validation');

		$data['title'] = 'Input Data Himpunan';
		$data['kriteria'] = $this->Model_Crips->combokriteria();

		$this->form_validation->set_rules('id_k', 'NAMA KRITERIA', 'trim|required');
		$this->form_validation->set_rules('id_cp', 'ID CRIPS', 'trim|required');
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

	function delete($id_cp){
		$id_cp = $this->uri->segment(3);
		if (empty($id_cp))
        {
            show_404();
        }

		$data['kriteria'] = $this->Model_Crips->bacaid($id_cp);
		$this->Model_Crips->hapus($id_cp);
		redirect('crips');
	}

	function edit($id_cp){
		$id_cp = $this->uri->segment(3);
		if (empty($id_cp))
        {
            show_404();
        }

        $data['title'] = 'Ubah Data Kriteria';
		$data['crips'] = $this->Model_Crips->bacaid($id_cp);
		$data['kriteria'] = $this->Model_Crips->combokriteria();

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
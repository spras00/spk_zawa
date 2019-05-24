<?php 
 
 
class Kriteria extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->model('Model_Kriteria'); 
	}
 
	function index(){
		$data['title'] = 'Kriteria Penilaian';
		$data['kriteria'] = $this->Model_Kriteria->tampil_data();
		$this->load->view('header', $data);
		$this->load->view('view_kriteria', $data);
		$this->load->view('footer');
	}

	function input()
	{
		$this->load->library('form_validation');

		$data['title'] = 'Input Data Kriteria';

		$this->form_validation->set_rules('id_k', 'ID KRITERIA', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('nm_k', 'NAMA KRITERIA', 'required');
		$this->form_validation->set_rules('atribut', 'ATRIBUT', 'required');
		$this->form_validation->set_rules('bobot', 'BOBOT', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('input_kriteria',$data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Kriteria->buat();
			redirect('kriteria');
		}
	}

	function delete($id_k){
		$id_k = $this->uri->segment(3);
		if (empty($id_k))
        {
            show_404();
        }

		$data['kriteria'] = $this->Model_Kriteria->bacaid($id_k);
		$this->Model_Kriteria->hapus($id_k);
		redirect('kriteria');
	}

	function edit($id_k){
		$id_k = $this->uri->segment(3);
		if (empty($id_k))
        {
            show_404();
        }

        $data['title'] = 'Ubah Data Kriteria';
		$data['kriteria'] = $this->Model_Kriteria->bacaid($id_k);

        $this->form_validation->set_rules('id_k', 'ID KRITERIA', 'trim|required');
		$this->form_validation->set_rules('nm_k', 'NAMA KRITERIA', 'required');
		$this->form_validation->set_rules('atribut', 'ATRIBUT', 'required');
		$this->form_validation->set_rules('bobot', 'BOBOT', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('edit_kriteria',$data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Kriteria->buat($id_k);
			redirect('kriteria');
		}
	}
  
}

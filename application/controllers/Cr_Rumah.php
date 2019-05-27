<?php 
 
 
class Cr_Rumah extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->model('Model_Cr_Rumah'); 
	}

	function index(){
		$data['title'] = 'Data Crips Rumah';
		$data['cr_rumah'] = $this->Model_Cr_Rumah->tampil_data();
		$this->load->view('header', $data);
		$this->load->view('view_cr_rumah', $data);
		$this->load->view('footer');
	}

	function input(){

		$id_a = $this->uri->segment(3);
		if (empty($id_a))
        {
            show_404();
        }
		$this->load->library('form_validation');

		$data['title'] = 'Input Data Crips Rumah';
		$data['alternatif'] = $this->Model_Cr_Rumah->combo_alter($id_a);
		$data['harga'] = $this->Model_Cr_Rumah->combo_harga();
		$data['lokasi'] = $this->Model_Cr_Rumah->combo_lokasi();
		$data['luas'] = $this->Model_Cr_Rumah->combo_luas();
		$data['tipe'] = $this->Model_Cr_Rumah->combo_tipe();
		$data['fasilitas'] = $this->Model_Cr_Rumah->combo_fasilitas();


		$this->form_validation->set_rules('alt', 'NAMA ALTERNATIF', 'required');
		$this->form_validation->set_rules('harga', 'HARGA', 'required');
		$this->form_validation->set_rules('lokasi', 'LOKASI', 'required');
		$this->form_validation->set_rules('luas', 'LUAS TANAH', 'required');
		$this->form_validation->set_rules('tipe', 'TIPE KAMAR', 'required');
		$this->form_validation->set_rules('fasilitas', 'FASILITAS', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('input_cr_rumah',$data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Cr_Rumah->buat();
			redirect('cr_rumah');
		}
	}
}
<?php 
 
 
class Cr_Rumah extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->model('Model_Cr_Rumah'); 
	}

	function index(){
		$data['title'] = 'Data Crips Rumah';
		$data['rows'] = $this->Model_Cr_Rumah->tampil_data($this->input->get('search'));   
		$this->load->view('header', $data);
		$this->load->view('view_cr_rumah', $data);
		$this->load->view('footer');
	}

	function input($ID = null){


		$this->load->library('form_validation');

		$data['title'] = 'Input Data Crips Rumah';
		
		$this->form_validation->set_rules( 'kode_crips[]', 'Crips', 'required|is_natural' );

		if($this->form_validation->run() === FALSE)
		{

			 $data['rows'] = $this->Model_Cr_Rumah->baca_alt($ID);
                
                if($data['rows']) 
                {                    
                    $data['title'] .= $data['rows'][0]->nm_a;
                }
                
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
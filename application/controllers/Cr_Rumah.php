<?php 
 
 
class Cr_Rumah extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		if (! $this->session->userdata('username'))
        {
            redirect('login');
        }
		$this->load->library('form_validation');		
		$this->load->model('Model_Cr_Rumah'); 
		$this->load->model('Model_Crips');
	}

	function index(){
		$data['title'] = 'Data Crips Rumah';
		$data['rows'] = $this->Model_Cr_Rumah->tampil_data();   
		$this->load->view('header', $data);
		$this->load->view('view_cr_rumah', $data);
		$this->load->view('footer');
	}

	function input($id_r = null){

		$data['title'] = 'Data Crips ';
		
		$this->form_validation->set_rules( 'id_cp[]', 'Crips', 'required' );

		if($this->form_validation->run() === FALSE)
		{

			 $data['rows'] = $this->Model_Cr_Rumah->baca_alt($id_r);
                
                if($data['rows']) 
                {                    
                    $data['title'] .= $data['rows'][0]->nm_a;
                }
                
			$this->load->view('header', $data);
			$this->load->view('input_cr_rumah', $data);
			$this->load->view('footer');	
		}else
		{
			$this->Model_Cr_Rumah->buat( $this->input->post('id_cp') );
			redirect('cr_rumah');
		}
	}
}
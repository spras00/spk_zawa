<?php
class Login extends CI_Controller {
    
    function __construct()

    {
        parent::__construct();
        $this->load->library('form_validation');        
        $this->load->model('Model_Kriteria'); 
        $this->load->model('Model_Login');
        $this->load->library('form_validation');           
    }

    function index()

    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','USERNAME','required');  
        $this->form_validation->set_rules('password','PASSWORD','required');

        if($this->form_validation->run() === FALSE)
            {       
                $this->load->view('login');
            }
            else
            {
                
                $user = $this->input->post('username');
                $pass = $this->input->post('password');

                $user_login = $this->Model_Login->login($user, $pass);

                if($user_login){
                    $session_data = array(
                        'username' => $user
                    );
                    $this->session->set_userdata($session_data);
                    redirect('login/a_login');
                    }
                    else{
                        $this->session->set_flashdata('error', 'Username atau Password salah!');
                        redirect('login');
                        } 
                }
       
    }
           
    function a_login()
    
    {         
        if ($this->session->userdata('username') != '') {
            redirect('home/index');
        }
        else{
            redirect('login/index');
        }
        
    }
    
    function logout()

    {
        $this->session->sess_destroy();
        redirect();
    }

}


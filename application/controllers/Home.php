<?php

/**
* 
*/
class Home extends CI_Controller{
	
	function __construct()

	{
		parent::__construct();
		if (! $this->session->userdata('username'))
        {
            redirect('login');
        }
	}

	function index()

	{
		$data['title'] = 'Sistem Penunjang Keputusan';
		$this->load->view('header', $data);
		$this->load->view("home",$data);
		$this->load->view('footer');
	}

}
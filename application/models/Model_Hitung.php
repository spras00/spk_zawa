<?php


Class Model_Hitung extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	function get_rel(){
		$query = $this->db->get('r_altrumah');
		$this->db->order_by('id_a');
		$this->db->order_by('id_k');     
        return $query->result();  
	}
}	

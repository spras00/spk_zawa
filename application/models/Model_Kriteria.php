<?php

class Model_Kriteria extends CI_Model{


	function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		$query = $this->db->get('_kriteria');
		return $query->result_array();
	}

	function bacaid($id_k = 0)
	{
		if($id_k === 0)
		{
			$query =  $this->db->get('_kriteria');
			return $query->result_array();
		}

		$query = $this->db->get_where('_kriteria', array('id_k' => $id_k));
		return $query->row_array();
	
	}
 
	function buat($id_k = NULL)

	{
		
		$data = array(
			'id_k' => $this->input->post('id_k'),
			'nm_k'=> $this->input->post('nm_k'),
			'atribut'=> $this->input->post('atribut'),
			'bobot'=> $this->input->post('bobot')
		);

		if($id_k == NULL)
		{
			return $this->db->insert('_kriteria', $data);	
		}else
		{
			$this->db->where('id_k', $id_k);
			return $this->db->update('_kriteria', $data);
		}
		
	}

	function hapus($id_k)
	{
		$this->db->where('id_k', $id_k);
		return $this->db->delete('_kriteria');
	}
}
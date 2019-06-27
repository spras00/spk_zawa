<?php

class Model_Kriteria extends CI_Model{


	function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		$query = $this->db->get('kriteria');
		return $query->result_array();
	}

	function tampil_hitung(){
		$query = $this->db->get('kriteria');
		return $query->result();
	}

	function bacaid($id_k = 0)
	{
		if($id_k === 0)
		{
			$query =  $this->db->get('kriteria');
			return $query->result_array();
		}

		$query = $this->db->get_where('kriteria', array('id_k' => $id_k));
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
			$this->db->insert('kriteria', $data);
			$this->db->query("INSERT INTO r_altrumah(id_k, id_a, id_cp) SELECT '$data[id_k]', id_a, 0  FROM altrumah"); 	
		}else
		{
			$this->db->where('id_k', $id_k);
			return $this->db->update('kriteria', $data);
		}
		
	}

	function hapus($id_k)
	{
		$this->db->delete('r_altrumah', array('id_k' => $id_k));
		$this->db->delete('kriteria', array('id_k' => $id_k));
	}
}
<?php

class Model_Rumah extends CI_Model{


	function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		$query = $this->db->get('_altrumah');
		return $query->result_array();
	}

	function tampil_hitung(){
		$query = $this->db->get('_altrumah');
		return $query->result();
	}

	function bacaid($id_a = 0)
	{
		if($id_a === 0)
		{
			$query =  $this->db->get('_altrumah');
			return $query->result_array();
		}

		$query = $this->db->get_where('_altrumah', array('id_a' => $id_a));
		return $query->row_array();
	
	}

	function buat($id_a = NULL)

	{
		
		$data = array(
			'id_a'=> $this->input->post('id_a'),
			'nm_a'=> $this->input->post('nm_a'),
			'lokasi'=> $this->input->post('lokasi'),
			'harga'=> $this->input->post('harga'),
			'luas'=> $this->input->post('luas'),
			'tipe'=> $this->input->post('tipe'),
			'fasilitas'=> $this->input->post('fasilitas')
		);	      

		if($id_a == NULL)
		{	
			$this->db->insert('_altrumah', $data);
			$this->db->query("INSERT INTO r_altrumah(id_k, id_a, id_cp) SELECT id_k, '$data[id_a]', 0  FROM _kriteria");	
		}
	}

	function ubah($id_a = NULL)
	{
		$data = array(
			'id_a'=> $this->input->post('id_a'),
			'nm_a'=> $this->input->post('nm_a'),
			'lokasi'=> $this->input->post('lokasi'),
			'harga'=> $this->input->post('harga'),
			'luas'=> $this->input->post('luas'),
			'tipe'=> $this->input->post('tipe'),
			'fasilitas'=> $this->input->post('fasilitas')
		);
		if($id_a != NULL){
			$this->db->where('id_a', $id_a);
			return $this->db->update('_altrumah', $data);
		}
			
	}

	function hapus($id_a)
	{	
		$this->db->delete('_altrumah', array('id_a' => $id_a));
		$this->db->delete('r_altrumah', array('id_a' => $id_a));
	}
}
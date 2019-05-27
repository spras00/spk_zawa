<?php


Class Model_Cr_Rumah extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		$query = $this->db->get('_altrumah');
		return $query->result_array();
	}

	function tampil_data_rel(){
		$this->db->select('a.id_a, b.nm_a, c.skor SUM(IF(a.id_a=C1,a.');
		$this->db->from('_altrumah a');
		$this->db->join('r_altrumah b', 'b.id_a=a.id_a');
		$this->db->join('_crips c', 'b.id_cp=c.id_cp');
		$this->db->join('_kriteria d', 'd.id_k=d.id_k');
	}

	function combo_alter(){
		$query = $this->db->get('_altrumah');
		return $query->result();
	}

	function combo_harga(){
		$query = $this->db->query('SELECT * FROM _crips WHERE id_k="C1" ORDER BY skor');
		return $query->result();
	}

	function combo_lokasi(){
		$query = $this->db->query('SELECT * FROM _crips WHERE id_k="C2" ORDER BY skor');
		return $query->result();
	}

	function combo_luas(){
		$query = $this->db->query('SELECT * FROM _crips WHERE id_k="C3" ORDER BY skor');
		return $query->result();
	}

	function combo_tipe(){
		$query = $this->db->query('SELECT * FROM _crips WHERE id_k="C4" ORDER BY skor');
		return $query->result();
	}

	function combo_fasilitas(){
		$query = $this->db->query('SELECT * FROM _crips WHERE id_k="C5" ORDER BY skor');
		return $query->result();
	}

	function bacaid($id_r = 0)
	{
		if($id_r === 0)
		{
			$query =  $this->db->get('r_altrumah');
			return $query->result_array();
		}

		$query = $this->db->get_where('r_altrumah', array('id_r' => $id_r));
		return $query->row_array();
	
	}

	function buat($id_r = NULL)

	{
		
		$data = array(
			'id_r'=> $this->input->post('id_r'),
			'id_a'=> $this->input->post('id_a'),
			'id_k'=> $this->input->post('id_k'),
			'id_cp'=> $this->input->post('id_cp')
		);

		if($id_r == NULL)
		{
			return $this->db->insert('r_altrumah', $data);	
		}else
		{
			$this->db->where('id_r', $id_r);
			return $this->db->update('r_altrumah', $data);
		}
		
	}




}
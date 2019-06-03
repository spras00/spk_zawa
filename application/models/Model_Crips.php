<?php


Class Model_Crips extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	function tampil_data1(){
		$query = $this->db->get('_kriteria');
		return $query->result();
		}

	function tampil_data2($id_k){
		$query = $this->db->get_where('_crips', array('id_k' => $id_k));
		return $query->result();
	}

	function bacaid($id_cp = 0)
	{
		if($id_cp === 0)
		{
			$query =  $this->db->get('_crips');
			return $query->result_array();
		}

		$query = $this->db->get_where('_crips', array('id_cp' => $id_cp));
		return $query->row_array();
	}

	function kriteria($id_k){
		$query = $this->db->get_where('_kriteria', array('id_k' => $id_k));
		return $query->row_array();
	}

	function crips_kriteria($id_k)
    {        
        $this->db->where( array('id_k' => $id_k));  
        $this->db->order_by('skor');      
        $query = $this->db->get('_crips');
        return $query->result();
    }

	function buat($id_cp = NULL)

	{
		
		$data = array(
			'id_cp' => $this->input->post('id_cp'),
			'nm_cp'=> $this->input->post('nm_cp'),
			'id_k' => $this->input->post('id_k'),
			'skor'=> $this->input->post('skor')
		);

		if($id_cp == NULL)
		{
			return $this->db->insert('_crips', $data);	
		}else
		{
			$this->db->where('id_cp', $id_cp);
			return $this->db->update('_crips', $data);
		}
		
	}

	function hapus($id_cp)
	{
		$this->db->where('id_cp', $id_cp);
		return $this->db->delete('_crips');
	}

}
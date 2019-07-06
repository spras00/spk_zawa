<?php


Class Model_Crips extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	function isipage($limit, $start){
		$this->db->join('kriteria', 'kriteria.id_k=crips.id_k');
        $this->db->order_by( 'kriteria.id_k' );
        $this->db->order_by('skor');
        $this->db->limit($limit, $start);
        $query = $this->db->get('crips');
		return $query->result_array();
		}

	function row(){
		return $query = $this->db->get('crips')->num_rows();
		
	}

	function tampil_hitung(){
        $this->db->join('kriteria', 'kriteria.id_k=crips.id_k');
        $this->db->order_by( 'kriteria.id_k' );
        $this->db->order_by('skor');
        $query = $this->db->get('crips');
        return $query->result();
	}

	function bacaid($id_cp = 0)
	{
		if($id_cp === 0)
		{
			$query =  $this->db->get('crips');
			return $query->result_array();
		}

		$query = $this->db->get_where('crips', array('id_cp' => $id_cp));
		return $query->row_array();
	}

	function kriteria(){
		$query = $this->db->get('kriteria');
		return $query->result();
	}

	function crips_kriteria($id_k)
    {        
        $this->db->where( array('id_k' => $id_k));  
        $this->db->order_by('skor');      
        $query = $this->db->get('crips');
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
			return $this->db->insert('crips', $data);	
		}else
		{
			$this->db->where('id_cp', $id_cp);
			return $this->db->update('crips', $data);
		}
		
	}

	function hapus($id_cp)
	{
		$this->db->delete('crips', array('id_cp' => $id_cp));
	}

}
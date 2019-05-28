<?php


Class Model_Cr_Rumah extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}


	function tampil_data($search = ''){

		$query = $this->db->query("SELECT r.*, a.nm_a, c.nm_cp
        FROM r_altrumah r
            INNER JOIN _kriteria k ON k.id_k=r.id_k
            INNER JOIN _altrumah a ON a.id_a=r.id_a
            LEFT JOIN _crips c ON c.id_cp = r.id_cp
        WHERE (a.id_a LIKE '%".$search."%' OR a.nm_a LIKE '%".$search."%')
        ORDER BY r.id_a, r.id_k");
                                
        return $query->result();
    }
	function baca_alt($ID){

		 $query = $this->db->query("SELECT
            r.*, a.nm_a, k.nm_k
        FROM r_altrumah r 
        	INNER JOIN _kriteria k ON k.id_k=r.id_k
            INNER JOIN _altrumah a ON a.id_a=r.id_a
            LEFT JOIN _crips c ON c.id_cp = r.id_cp
        WHERE a.id_a='$ID' 
        ORDER BY r.id_k");
                
        return $query->result();
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
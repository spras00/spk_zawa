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
	function baca_alt( $ID ){

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

	function buat($id_cp)

	{
		 foreach ($id_cp as $key => $val){                   
            $this->db->update( 'r_altrumah', array('id_cp' =>$val), array('ID' => $key));   
        } 
		
	}

}
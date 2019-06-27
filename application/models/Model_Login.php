<?php
class Model_Login extends CI_Model {

	function login($user, $pass){

		$this->db->where('user', $user);
		$this->db->where('pwd', $pass);
		$query = $this->db->get('user');

		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}


}

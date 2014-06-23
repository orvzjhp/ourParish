<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class login extends CI_Model
{
	
	
	function model_verifyUser($data) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $data['username']); 
		$this->db->where('password', $data['password']); 
		// $this->db->where('password', MD5($data['password'])); 
		
		$query = $this->db->get();
 
		if($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	//gets assigned parish
	function model_getAdminDetails($data) {
		$this->db->select('id_parish, role');
		$this->db->from('user');
		$this->db->where('username', $data); 
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
//			return $query[0]['id_parish'];			
			return $query->result_array();			
		}
		else
		{
			return false;
		}	
	}
	
	
	

	

}

?>
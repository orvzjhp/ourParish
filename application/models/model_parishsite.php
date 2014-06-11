<?php

Class model_parishsite extends CI_Model
{
	function model_getParishData() {
			
		$this->db->select('parish.parish, street.street, barangay.barangay, towncity.towncity, parish.tnumber, image.filename, image.ext');
		$this->db->from('parish');
		$this->db->join('street', 'parish.street = street.id_street');
		$this->db->join('barangay', 'parish.barangay = barangay.id_barangay');
		$this->db->join('towncity', 'parish.towncity = towncity.id_towncity');
		$this->db->join('image', 'parish.image = image.image_id');		
		
		$query = $this->db->get();
 
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}

?>
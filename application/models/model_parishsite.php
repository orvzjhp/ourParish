<?php

Class model_parishsite extends CI_Model
{
	function model_getParishData() {
			
		$this->db->select('parish.id_parish, parish.parish, street.street, barangay.barangay, towncity.towncity, parish.tnumber, image.filename, image.ext');
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
	
	function model_getStreets() {
			
		$this->db->select('*');
		$this->db->from('street');
		
		$query = $this->db->get();
 
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	
	function model_getBarangays() {
			
		$this->db->select('*');
		$this->db->from('barangay');
		
		$query = $this->db->get();
 
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	
	function model_getTowncity() {
			
		$this->db->select('*');
		$this->db->from('towncity');
		
		$query = $this->db->get();
 
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}

	function model_searchMass($data) {
		// $this->db->select('parish.parish, street.street, barangay.barangay, towncity.towncity, day.day, mass_schedule.time_start, language.language');
		$this->db->select('parish.parish');
		$this->db->from('mass_schedule');
		
 		//$this->db->join('parish', 'mass_schedule.id_parish = parish.id_parish');
 		// $this->db->join('street', 'parish.street = street.id_street');
		// $this->db->join('barangay', 'parish.barangay = barangay.id_barangay');
		// $this->db->join('towncity', 'parish.towncity = towncity.id_towncity');
		// $this->db->join('day', 'mass_schedule.day = day.id_day');
		// $this->db->join('language', 'mass_schedule.language = language.id_language');
		
		if($data['id_parish'] != 0)
			$this->db->where('mass_schedule.id_parish', $data['id_parish']); 
		
		// if($data['day'] != 0)
			// $this->db->where('mass_schedule.day', $data['day']);

		// if($data['time_start'] != 0)
			// $this->db->where('mass_schedule.time_start', $data['time_start']);
			
		// if($data['street'] != 0)
			// $this->db->where('parish.street', $data['street']);
			
		// if($data['barangay'] != 0)
			// $this->db->where('parish.barangay', $data['barangay']);
			
		// if($data['towncity'] != 0)
			// $this->db->where('parish.towncity', $data['towncity']);
			
		// if($data['language'] != 0)
			// $this->db->where('mass_schedule.language', $data['language']);
						
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
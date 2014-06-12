
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class p_functs extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('model_parishsite');
 }
 
 function search_massSched()
 {
	$this->load->library('form_validation');
	
	$this->form_validation->set_rules('parish', 'Parish', 'trim|required|xss_clean');
	$this->form_validation->set_rules('day', 'Day', 'trim|required|xss_clean');
	$this->form_validation->set_rules('time_start', 'Time_start', 'trim|required|xss_clean');
	$this->form_validation->set_rules('street', 'Street', 'trim|required|xss_clean');
	$this->form_validation->set_rules('barangay', 'Barangay', 'trim|required|xss_clean');
	$this->form_validation->set_rules('towncity', 'Towncity', 'trim|required|xss_clean');
	$this->form_validation->set_rules('mass-language', 'Mass-Language', 'trim|required|xss_clean');
	
	if($this->form_validation->run() == FALSE) {
		echo json_encode('validation run fail');
	} else {
		
		$data = array(
			'id_parish' => $this->input->post('parish'),
			'day' => $this->input->post('day'),
			'time_start' => $this->input->post('time_start'),
			'street' => $this->input->post('street'),
			'barangay' => $this->input->post('barangay'),
			'towncity' => $this->input->post('towncity'),
			'language' => $this->input->post('mass-language')
		);
		
		
		$searched = $this->model_parishsite->model_searchMass($data);
		echo jason_encode($searched);
	} 
	
 }
 
}

?>
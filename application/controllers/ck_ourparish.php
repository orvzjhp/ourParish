<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ourparish extends CI_Controller {

	public function index()
	{
		$this->showpage();
	}

	public function showpage()
	{
		$id_parish='1';
		$pagename='HOME';
		$this->load->model("ck_db");
		$data['page'] = $this->ck_db->getPage($id_parish);
		//$data['description'] = $this->ck_db->getDescription($id_parish,$pagename);
		$this->load->view("create_page",$data);
	}

	function showHeader()
	{
		$id='1';
		$this->load->model("ck_db");
		$data = $this->ck_db->getPage($id);
		
		echo json_encode($data);
	
	}

	function addPage()
	{
		$this->load->model("ck_db");
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pagename', 'Pagename', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE) {
			echo json_encode('Validation run fail');
		} else {
			$data = array(
			   'page_name' => $this->input->post('pagename') ,
			   'id_parish' => '1',
			   'description' => NULL
			);
			
			if($this->ck_db->pageAdd($data)) {
				echo json_encode('success');
			} else {
				echo json_encode('add Page fail');
			}
		}
	}

	function selectPage()
	{
		$id_parish='1';
		$this->load->model("ck_db");
		$this->load->library('form_validation');
		$this->form_validation->set_rules('page', 'Page', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE) {
			echo json_encode('Validation run fail');
		} else {
			$page = $this->input->post('page');
			$data = $this->ck_db->getDescription($id_parish,$page);
			echo json_encode($data);
		}	
	}

	function deletePage() {
		$this->load->model("ck_db");
		$this->load->library('form_validation');
		$this->form_validation->set_rules('page', 'Page', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE) {
			echo json_encode('Validation run fail');
		} else {
			$data = array(
			   'page_name' => $this->input->post('page')
			);
			
			if($this->ck_db->model_deletePage($data,1)) {
				echo json_encode('delete success');		
			} else {
				echo json_encode('delete fail');
			}
		}
	}

	function updatePage()
	{
		$id_parish = '1';
		$this->load->model("ck_db");
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pagename', 'Pagename', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_page', 'Id_Page', 'trim|required|xss_clean');
			
	
		if($this->form_validation->run() == FALSE) {
			echo json_encode('Validation run fail');
		} else {
			$page = array(
			   'page_name' => $this->input->post('pagename') 			   
			);
			$id = $this->input->post('id_page');
			$data = $this->ck_db->model_updatePage($id,$id_parish,$page);
			echo json_encode($data);
		}		
	}

	function renamePage()
	{
		$id_parish = '1';
		$this->load->model("ck_db");
		$this->load->library('form_validation');
		$this->form_validation->set_rules('page', 'Page', 'trim|required|xss_clean');
	
		if($this->form_validation->run() == FALSE) {
			echo json_encode('Validation run fail');
		} else {
			$page = $this->input->post('page'); 			   
			$data = $this->ck_db->model_selectIdPage($id_parish,$page);
			echo json_encode($data);
		}		
	}
	

	function updateDescription()
	{
		$id_parish = '1';
		$this->load->model("ck_db");
		$this->load->library('form_validation');
		$this->form_validation->set_rules('datavalue', 'Datavalue', 'trim|required|xss_clean');
		$this->form_validation->set_rules('activepage', 'Activepage', 'trim|required|xss_clean');
	
		if($this->form_validation->run() == FALSE) {
			echo json_encode($this->input->post('datavalue'));
		} else {
			$description = $this->input->post('datavalue');
			$dd = array(
               'description' => $description,
            );
			$page = $this->input->post('activepage');
			$data = $this->ck_db->model_updateDescription($page,$dd);
			echo json_encode($data);
		}	
	}
}

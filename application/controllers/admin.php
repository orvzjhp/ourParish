
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include "sessionController.php";

class admin extends sessionController {
  
  function __construct()
 {
   parent::__construct();
   //parent::sessionCheck();
 }
 
 function index()
 {
   $this->homePage();
 }
 
 function homePage() {
   $this->load->helper(array('form', 'url'));
   $this->load->view('admin/Header');
   $this->load->view('admin/Admin_Homepage');
 }
 
 function confirmation()
 {
   parent::sessionCheck();
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Confirmation',$data);	
 }

  function mass()
 {
   parent::sessionCheck();
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Mass',$data);	
 }

  function confession()
 {
   parent::sessionCheck();
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Confession',$data);	
 }
 
 function baptism()
 {
   parent::sessionCheck();
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Baptism',$data);
 }
 
 function updateForm()
 {
    parent::sessionCheck();
    $this->load->helper('url');
    $data['sched_id'] = $this->uri->segment(3);
	$this->load->view('admin/UpdateForm',$data);
 }
 
 function updateFormL()
 {
    parent::sessionCheck();
    $this->load->helper('url');
    $data['sched_id'] = $this->uri->segment(3);
	$this->load->view('admin/UpdateFormL', $data);
 }
}

?>


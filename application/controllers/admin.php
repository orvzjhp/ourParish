
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 
 
 function index()
 {
   $this->loginPage();
 }
 
 function loginPage() {
   
   $this->load->helper(array('form'));
   $this->load->view('admin/login_view'); 
 }
 
 function homePage() {
   $this->load->helper(array('form', 'url'));
   $this->load->view('admin/Header');
   $this->load->view('admin/Admin_Homepage');
 }
 
 function confirmation()
 {
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Confirmation',$data);	
 }

  function mass()
 {
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Mass',$data);	
 }

  function confession()
 {
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Confession',$data);	
 }
 
 function baptism()
 {
   $this->load->helper('url');
   $data['parish_id'] = $this->uri->segment(3);
   $this->load->view('admin/Admin_Baptism',$data);
 }
 
 function updateForm()
 {
    $this->load->helper('url');
    $data['sched_id'] = $this->uri->segment(3);
	$this->load->view('admin/UpdateForm',$data);
 }
 
 function updateFormL()
 {
    $this->load->helper('url');
    $data['sched_id'] = $this->uri->segment(3);
	$this->load->view('admin/UpdateFormL', $data);
 }
 
 function verifyUser() {
	$this->load->model('login');
	$this->load->library('form_validation');
	$this->load->helper('url');
	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_validate');
	
	if($this->form_validation->run() == FALSE) {
		$this->load->view('admin/login_view'); //user redirected to login page
	} else {
		redirect('admin/homePage', 'refresh');
	}
 }
 
 function validate($password) {
	$data = array(
		'username' => $this->input->post('username')
	);
	
	$data['password'] = $password;
	
	if($this->login->model_verifyUser($data)) {
		$this->load->library('session');
		$this->session->set_userdata('logged_in', $data);
		return TRUE;
	}
	else {
		$this->form_validation->set_message('validate', 'Invalid username or password');
		return FALSE;
	}
 }
 
 function logout() {
	$this->session->unset_userdata('logged_in');
	//redirect('admin/loginPage', 'refresh');
 }

}

?>


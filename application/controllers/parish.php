
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class parish extends CI_Controller {

 function __construct()
 { 
   parent::__construct();
 }
 
 function index()
 {
   $this->load->model('model_externals');
   $this->load->helper('url');
   
   $data = "";
   $parishKey = $this->uri->segment(3);
   $pageName = $this->uri->segment(4);
   
   
   if($pageName === false) {
	$link = $this->model_externals->model_getHome($parishKey);
	
	if($link === false) {
		$data['code'] = '<h1>An error has occurred</h1>';
	} else if($link === NULL) {
		$data['code'] = '<h1>Main page not found</h1>';
	} else {
		redirect($link);
	}	
   } else {
	$data['code'] = $this->model_externals->model_getPage($parishKey, $pageName);   
   }   
   
   $this->load->view('externals', $data);
 }

}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sessionController extends CI_Controller {
 
 public function __construct() {
	parent::__construct();
 }
 
 public function sessionCheck() {
	$this->load->library('session');
    if ( $this->session->userdata('user_data') == FALSE ) {
      redirect( "validate/loginPage" );
    }
 }

}

 
?>
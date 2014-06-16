<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 function inSession() {
    if($this->session->userdata('username') !== FALSE){
     return true;
	} else {
	 return false;
	}
 }
 
?>
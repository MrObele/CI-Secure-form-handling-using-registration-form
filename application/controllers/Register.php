<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Register extends CI_Controller{
    public function __Construct() {
        parent::__Construct();
       } 

	public function index(){
	    $data['main_content'] = 'Users/register';
		$this->load->view('layouts/main',$data);
		
	}

}
?>
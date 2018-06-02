<?php
   if (!defined('BASEPATH')) {
       exit('No direct script access allowed');
   }
   
   class Users extends CI_Controller
   {
   
    public function __Construct() {
           parent::__Construct();
       }
   
   
   	public function createUser(){
   		$this->form_validation->set_rules('name','Name','trim|required|max_length[20]|min_length[4]|xss_clean');
   		$this->form_validation->set_rules('gender','Gender','trim|required|xss_clean');
   		$this->form_validation->set_rules('username','Username','trim|required|max_length[20]|min_length[4]|xss_clean');
   		$this->form_validation->set_rules('password','Password','trim|required|max_length[20]|min_length[4]|xss_clean');
   		$this->form_validation->set_rules('password2','Confirm Password','trim|required|max_length[50]|min_length[4]|xss_clean|matches[password]');
   
   		if($this->form_validation->run() == FALSE){
   
   			$data['main_content'] = 'Users/register';
   		    $this->load->view('layouts/main',$data);
   
   		} else {
   			
            $postData = $this->input->post();
   			 $validate = $this->Authentication_model->validate_user($postData);// used to check from the autentication_model if the user exist or not it will return true if user exists
   			 $password = $this->input->post('password');
   			 $enc_password = md5($password);
   			 $name   = $this->input->post('name');
   			 $gender = $this->input->post('gender');
   			 $username = $this->input->post('username');
   			
                $data = array(
   		        'name'      =>$name,	 
   			    'gender'    =>$gender, 
    			'username'  =>$username,
    			'password'  => $enc_password
    			);
   
                if ($validate) {
                	$this->session->set_flashdata('user_exist','A user with those credentials already exists kindly review and try again');
   				redirect(base_url('Register'));
                }else{
                	if ($this->User_model->create_user($data)) {
   
   				$this->session->set_flashdata('registration_success','You have been registered successfully');
   				redirect(base_url('Home'));
   			}
   			else{
   				$this->session->set_flashdata('user_registration_error','unable to save your details try again');
   				redirect(base_url('Register'));
   
   			}
              }
   			
   
   		}
   	}
   
   }
   
   ?>
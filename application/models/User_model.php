<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /**
 * 
 */
 class User_model extends CI_Model
 {


 	public function create_user($data)
 	{
 		$insert = $this->db->insert('form_users',$data);
 		return $insert;
 	
 	}


 }

?>
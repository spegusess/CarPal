<?php

class Register_model extends CI_Model{

	function __construct() { 
		parent::__construct(); 
	 }
	   
	public function insert($data) { 
		if ($this->db->insert("tbl_users", $data)) { 
		   return true;
		} 
	} 

	 


}

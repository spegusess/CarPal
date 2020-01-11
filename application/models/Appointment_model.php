<?php

class Appointment_model extends CI_Model{

	function __construct() { 
		parent::__construct(); 
	 }
	   
	function insert($data) { 
        $this->db->insert("tbl_appointment", $data);
	 }
	 
	public function delete($appointment_id) { 
		if ($this->db->delete("tbl_appointment", "appointment_id = ".$appointment_id)) { 
		   return true;
		} 
	} 
	public function approve_appointment($appointment_id){ 
		$data = ['appointment_status' => 'Approved',];
		$this->db->where('appointment_id',$appointment_id);
		$this->db->update('tbl_appointment', $data);
	}
}

<?php

class Vehicle_model extends CI_Model{

	function __construct() { 
		parent::__construct(); 
	 }
	   
	function insert($data) { 
                $this->db->insert("tbl_vehicle", $data);
	}
	 
	public function delete($user_id) { 
		if ($this->db->delete("tbl_vehicle", "user_id = ".$user_id)) { 
		   return true;
		} 
	
        }
        /////
        //public function edit_vehicle($vehicle_no){
		//$data = [
                        //'vehicle_no' => 'NULL',
                
                //];
		//$this->db->where('vehicle_no',$vehicle_no);
		//$this->db->update('tbl_vehicle', $data);
	//}
        

	//function getVehicles(){
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/
        //$query = $this->db->query('SELECT vehicle_no FROM tbl_vehicle WHERE user_id=28');
        //return $query->result();
        //echo 'Total Results: ' . $query->num_rows();
        //}
}

<?php 
    class User_Model extends CI_Model {
        function __construct() { 
            parent::__construct(); 
        }
        

         public function insert($data) { 
            if ($this->db->insert("tbl_users", $data)) { 
               return true;
            }
        }
        //public function update($data,$old_user_id) { 
            //$this->db->set($data); 
            //$this->db->where("user_id", $old_user_id); 
            //$this->db->update("tbl_users", $data); 
        //} 
		//public function update($data, $user_id){
			//$this->db->$query(UPDATE `tbl_appointment` SET `vehicle_no` = 'SG GT 2222', `mobile_no` = '0712345633' WHERE `tbl_appointment`.`appointment_id` = 54 );
			//$query = $this->db->query('SELECT vehicle_no FROM tbl_vehicle WHERE user_id=28');
		//}
		
        public function delete($user_id) { 
            if ($this->db->delete("tbl_users", "user_id = ".$user_id)) { 
               return true; 
            } 
        }

    } 
?> 
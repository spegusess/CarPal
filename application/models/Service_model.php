<?php 
    class Service_Model extends CI_Model {
        function __construct() { 
            parent::__construct(); 
        }
        public function delete($service_id) { 
            if ($this->db->delete("tbl_services", "service_id = ".$service_id)) { 
               return true; 
            } 
         } 

        function getServices(){
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/
        $query = $this->db->query('SELECT service_type FROM tbl_services');
        return $query->result();
        //echo 'Total Results: ' . $query->num_rows();
        }
        public function insert($data) { 
            if ($this->db->insert("tbl_services", $data)) { 
               return true;
            } 
        }


    } 
?> 
<?php
class Service extends CI_Controller {
    function __construct() {
        parent::__construct();
        }
	function index()
	{	
		
    }
    
    public function delete_service() { 
        $this->load->model('service_model'); 
        $service_id = $this->uri->segment('3'); 
        $this->service_model->delete($service_id); 
  
        $query = $this->db->get("tbl_services"); 
        $data['service_records'] = $query->result(); 
		redirect('page');
        //$this->load->view('dashboard_view',$data); 
     } 
     public function add_service(){
        $this->load->model('Service_model');
			
        $data = array(
          'service_type' => $this->input->post('service_type'),
          'service_bill' => $this->input->post('service_bill')
        );
        
        //$this->db->insert("tbl_users",$data);
        $this->Service_model->insert($data);
        $query = $this->db->get("tbl_services"); 
        $data['records'] = $query->result(); 
		redirect('page');
        //$this->load->view('dashboard_view',$data);

     }

     
}


?>
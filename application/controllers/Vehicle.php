<?php
class Vehicle extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
       
    }

    public function addVehicle(){
        $this->load->helper('url'); 
        $this->load->model('Vehicle_model');

        $user_id = $this->session->userdata('user_id');
        $this->Vehicle_model->delete($user_id);

        $data = array( 
           'vehicle_no' => $this->input->post('vehicle_no'),
           'user_id' => $this->input->post('user_id'),
           'vehicle_class' => $this->input->post('vehicle_class'), 
           'vehicle_type' => $this->input->post('vehicle_type'),
           'vehicle_brand' => $this->input->post('vehicle_brand'),
           'vehicle_model' => $this->input->post('vehicle_model'),
           'vehicle_year' => $this->input->post('vehicle_year'),
           'vehicle_color' => $this->input->post('vehicle_color'),
           'last_service' => $this->input->post('last_service'),
           'next_service' => $this->input->post('next_service')
           
        ); 
     
        $this->Vehicle_model->insert($data);
		redirect('page/customer');
    }
    
    public function deleteVehicle($vehicle_no){

    }

  } 
?>
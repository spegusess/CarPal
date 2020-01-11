<?php
class Register extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('register_model');
  }

  function index(){
        $this->load->model('Register_model');
			
        $data = array(
          'user_name' => $this->input->post('name'),
          'user_email' => $this->input->post('email'),
          'user_password' => md5($this->input->post('password')),
          'user_mobile' => $this->input->post('mobile'),
          'vehicle_no' => $this->input->post('vehicle_no')
        );
        $this->session->set_userdata($data);
        $this->db->insert("tbl_users",$data);
        //$this->Register_model->insert($data);
        $query = $this->db->get("tbl_users"); 
        $data['records'] = $query->result(); 

      $this->load->model('user_model');
      $this->load->model('Service_model');
	  
	  //redirect('page');

      $id = $this->session->userdata('user_id');
      //$user_id = 28;
      //$query1 = $this->db->query('SELECT user_id FROM tbl_users WHERE user_name =user_name');
      //$user_id = $query1->result();

      $this->load->model('Vehicle_model');
      $query5 = $this->db->query("SELECT vehicle_no,vehicle_class,vehicle_type,vehicle_brand,vehicle_model,vehicle_year,vehicle_color,last_service,next_service from tbl_vehicle WHERE user_id='$id'");
      $data['vehicle_records'] = $query5->result();

      $this->load->model('Service_model');
      $query2 = $this->db->query('SELECT service_type FROM tbl_services');
      $data['services'] = $query2->result();

      $this->load->model('user_model');
      $query3 = $this->db->query("SELECT user_name,user_email,user_mobile,vehicle_no FROM tbl_users WHERE user_id='$id'");
      $data['user_detail'] = $query3->result();
		
		$vno = $this->session->userdata('vehicle_no');
      $this->load->model('Appointment_model');
      $query4 = $this->db->query("SELECT appointment_date,service_type,current_milage FROM tbl_appointment WHERE vehicle_no='$vno'");
      $data['appointment_detail'] = $query4->result();
	  $this->load->view('user_view',$data); 
  }

}

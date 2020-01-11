<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
        $query1 = $this->db->get("tbl_appointment"); 
        $data['appointment_records'] = $query1->result();

        $query2 = $this->db->get("tbl_services"); 
        $data['servc_records'] = $query2->result();

        $query3 = $this->db->get("tbl_users"); 
        $data['records'] = $query3->result(); 
     
        $this->load->helper('url'); 
        $this->load->view('dashboard_view',$data);
      }else{
          echo "Access Denied";
      }
      

  } 

  function refresh_user(){
    $this->load->view('user_view');
  }
  function refresh_admin(){
    $this->load->view('dashboard_view');
  }

  function staff(){
    //Allowing access to staff only
    if($this->session->userdata('level')==='2'){
      $query1 = $this->db->get("tbl_appointment"); 
        $data['appointment_records'] = $query1->result();

        $query2 = $this->db->get("tbl_services"); 
        $data['servc_records'] = $query2->result();

        $query3 = $this->db->get("tbl_users"); 
        $data['records'] = $query3->result(); 
     
        $this->load->helper('url'); 
        $this->load->view('dashboard_view',$data);
    }else{
        echo "Access Denied";
    }
  }

  function customer(){
    //Allowing access to customer only
    if($this->session->userdata('level')==='3'){
      //set userid TODO
      $this->load->model('user_model');
      $this->load->model('Service_model');

      //$uname_ = $this->session->userdata('user_name');
      //$query1 = $this->db->query('SELECT user_id FROM tbl_users WHERE user_name = user_name');
      //$user_id = $query1->result();

      $this->load->model('Vehicle_model');
      $id = $this->session->userdata('user_id');
      $query = $this->db->query("SELECT vehicle_no,vehicle_class,vehicle_type,vehicle_brand,vehicle_model,vehicle_year,vehicle_color,last_service,next_service FROM tbl_vehicle WHERE user_id='$id'");
      $data['vehicle_records'] = $query->result();

      $this->load->model('Service_model');
      $query2 = $this->db->query('SELECT service_type FROM tbl_services');
      $data['services'] = $query2->result();

      $this->load->model('user_model');
      $query3 = $this->db->query("SELECT user_name,user_email,user_mobile,vehicle_no FROM tbl_users WHERE user_id='$id'");
      $data['user_detail'] = $query3->result();

      $this->load->model('Appointment_model');
      $vno =  $this->session->userdata('vehicle_no');
      $query4 = $this->db->query("SELECT appointment_date,service_type,current_milage FROM tbl_appointment WHERE appointment_status='Approved' AND vehicle_no='$vno'");
      $data['appointment_detail'] = $query4->result();

      $this->load->view('user_view',$data);
      }

    
    else{
        echo "Access Denied";
    }
  }
  

}
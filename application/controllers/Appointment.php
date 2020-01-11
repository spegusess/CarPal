<?php

class Appointment extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('appointment_model');
}
function index() {
    //Including validation library
    $this->load->library('form_validation');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    //Validating Name Field
    //$this->form_validation->set_rules('user_name', 'Username', 'required|min_length[5]|max_length[15]');

    //Validating Email Field
    //$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');

    //Validating Mobile no. Field
    //$this->form_validation->set_rules('user_mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

    //if ($this->form_validation->run() == FALSE) {
    //$this->load->view('user_view');
	
    $this->load->view('user_view');
    //} else {
    //Setting values for tabel columns
    $data = array( 
        'vehicle_no' => $this->input->post('vehicle_no'), 
        'appointment_date' => $this->input->post('date'),
        'appointment_time' => $this->input->post('time'),
        'service_type' => $this->input->post('service_type'),
        //'user_email' =>  $this->input->post('user_email'),
        //'mobile_no' =>  $this->input->post('mobile_no')
    );
    //Transfering data to Model
    $this->Appointment_model->insert($data);
    $data['message'] = 'Data Inserted Successfully';
	redirect('page/customer');
    //Loading View
    //$this->load->view('user_view', $data);
    }


    function make_appointment() { 
        $this->load->helper('url'); 
        $this->load->model('Appointment_model');
        $data = array( 
           'vehicle_no' => $this->input->post('vehicle_no'), 
           'appointment_date' => $this->input->post('date'),
           'appointment_time' => $this->input->post('time'),
           'service_type' => $this->input->post('service_type'),
           'current_milage' => $this->input->post('current_milage'),
           'user_email' =>  $this->input->post('user_email'),
           'mobile_no' =>  $this->input->post('mobile_no')
        ); 
     
        $this->Appointment_model->insert($data); 
        // view added appointment
        //$query = $this->db->get("stud"); 
        //$data['records'] = $query->result(); 


        //set userid TODO
      $this->load->model('user_model');
      $this->load->model('Service_model');

      /* $uname_ = $this->session->userdata('user_name'); */
      //$user_id = 28;
      //$query1 = $this->db->query('SELECT user_id FROM tbl_users WHERE user_name =user_name');
      /* $user_id = $this->session->userdata('user_id');

      $this->load->model('Vehicle_model');
      $query = $this->db->query('SELECT vehicle_no,vehicle_class,vehicle_type,vehicle_brand,vehicle_model,vehicle_year,vehicle_color,last_service,next_service  from tbl_vehicle WHERE user_id = user_id');
      $data['vehicle_records'] = $query->result();

      $this->load->model('Service_model');
      $query2 = $this->db->query('SELECT service_type FROM tbl_services');
      $data['services'] = $query2->result();

      $this->load->model('user_model');
      $query3 = $this->db->query('SELECT user_name,user_email,user_mobile,vehicle_no FROM tbl_users WHERE user_name=user_name');
      $data['user_detail'] = $query3->result();

      $this->load->model('Appointment_model');
      $query4 = $this->db->query('SELECT appointment_date,service_type,current_milage FROM tbl_appointment WHERE vehicle_no=vehicle_no');
      $data['appointment_detail'] = $query4->result();


        $this->load->view('user_view',$data); */
		
		redirect('page/customer');
      }

      public function approve() { 
        $this->load->model('Appointment_model'); 
        $appointment_id = $this->uri->segment('3'); 
        $this->Appointment_model->approve_appointment($appointment_id); 
  
        $query = $this->db->get("tbl_appointment"); 
        $data['appointment_records'] = $query->result(); 
		redirect('page');
        //$this->load->view('dashboard_view',$data); 
     }


    public function delete_appointment() { 
        $this->load->model('Appointment_model'); 
        $appointment_id = $this->uri->segment('3'); 
        $this->Appointment_model->delete($appointment_id); 
  
        $query = $this->db->get("tbl_appointment"); 
        $data['appointment_records'] = $query->result(); 
		redirect('page');
        //$this->load->view('dashboard_view',$data); 
     } 








}


?>
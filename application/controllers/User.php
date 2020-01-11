<?php
class User extends CI_Controller {
    function __construct() {
        parent::__construct();
        }
	function index()
	{	
		
    }
    
    public function delete_user() { 
        $this->load->model('user_model'); 
        $user_id = $this->uri->segment('3'); 
        $this->user_model->delete($user_id); 
  
        $query = $this->db->get("tbl_users"); 
        $data['user_records'] = $query->result(); 
		redirect('page');
        //$this->load->view('dashboard_view',$data); 
     }

     public function add_user(){
        $this->load->model('user_model');
			
        $data = array(
          'user_level' => $this->input->post('user_role'),
          'user_name' => $this->input->post('user_name'),
          'user_email' => $this->input->post('user_email'),
          'user_password' => md5($this->input->post('user_password')),
          'user_mobile' => $this->input->post('mobile_no'),
          'vehicle_no' => $this->input->post('vehicle_no')
        );
        
        //$this->db->insert("tbl_users",$data);
        $this->user_model->insert($data);
        $query = $this->db->get("tbl_users"); 
        $data['records'] = $query->result(); 
		redirect('page');
        //$this->load->view('dashboard_view',$data);

     }
	 
	 public function update_user(){
		$this->load->helper('url'); 
        $this->load->model('User_model');

        $user_id = $this->session->userdata('user_id');
        $this->User_model->delete($user_id);

        $data = array( 
           'user_name' => $this->input->post('user_name'),
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
     
        $this->User_model->insert($data);
    }
		 

    public function update_u(){ 
      $this->load->model('User_model');
	  $id = $this->session->userdata('user_id');
	  
      $data = array( 
        'user_name' => $this->input->post('user_name'),
		'user_email' => $this->input->post('user_email'),
		'user_mobile' => $this->input->post('user_mobile'), 
		'vehicle_no' => $this->input->post('vehicle_no') 
      ); 
		
		$this->db->update('tbl_users', $data, "user_id = $id");
		//$this->db->set($data);
		//$this->db->where('user_id',$id);
		//$this->db->replace('tbl_users',$data);
		redirect('page/customer');
		
    }
	
/* 	public function reset($user_id){
		$this->load->library('email');
		
		$this->email->from('admin@carpal.dev', 'CarPal');
		$this->email->to('.$user_email');									// check
		$this->email->cc('admin@carpal.dev');

		$this->email->subject('Carpal Password Reset');
		$this->email->message('Your Carpal Password is ".$user_password"'); // check

		$this->email->send();
	} */

     
}


?>
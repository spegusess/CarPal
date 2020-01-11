    
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calender extends CI_Controller {
	public function index($year = NULL , $month = NULL)
	{
		$this->load->model('Calender_model');
		$data['calender'] = $this->Calender_model->getcalender($year , $month);
		$this->load->view('Calender_view', $data);
	}
}
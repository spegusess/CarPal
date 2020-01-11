<?php
class C_404 extends CI_Controller
{
	public function __construct()
	{
	        parent::__construct();
	}
 
	public function index()
	{
		$this->output->set_status_header('404');
		//$data['content'] = 'V_404';  // View name
		$this->load->view('V_404');
	}
}
?>
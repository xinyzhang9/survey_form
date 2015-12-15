<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Survey extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->output->enable_profiler();
	}

	public function index(){
		$this->session->set_userdata('name',$this->input->post('name'));
		$this->session->set_userdata('location',$this->input->post('location'));
		$this->session->set_userdata('language',$this->input->post('language'));
		$this->session->set_userdata('comment',$this->input->post('comment'));

		$this->load->view('result');

	}

	public function back(){
		$this->session->unset_userdata();
		redirect('/');
	}
}

?>
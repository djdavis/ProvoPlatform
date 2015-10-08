<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index() {
		// Page variables
		$page['title'] = "Analytics Dashboard";	  
		$this->load->view('header', $page);	
		$this->load->view('login');
		$this->load->view('footer');
	}
  
	public function verify() {
		
		$this->load->model('Verifylogin_model');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$verified = $this->Verifylogin_model->check($username,$password);
		
		if(!$verified) {
			$page['title'] 		= "Analytics Dashboard | Incorrect Password";
			$page['errors'][] 	= "Incorrect user/password combination!";
			$this->load->view('header', $page);	
			$this->load->view('login', $page);
			$this->load->view('footer');
		} else {
			$session = array('id' => $verified[0]->user_id, 'email' => $verified[0]->user_email);
			$this->session->set_userdata('logged_in', $session);
			redirect('home', 'refresh');	
		}
	}
}

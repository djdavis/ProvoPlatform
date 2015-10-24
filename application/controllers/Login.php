<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index() {
        if ($this->session->userdata('user_id')) {
            redirect('home', 'refresh');
        } else {
            // Page variables
            $page['title'] = "Login | Cisco Analytics Dashboard";	  
            $this->load->view('header', $page);	
            $this->load->view('login');
            $this->load->view('footer');
        }
	}
  
	public function verify() {
		$this->output->enable_profiler(TRUE);
		$this->load->model('Login_model');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        
		if(!$this->Login_model->validate($username, $password)) {
			$page['title'] 		= "Incorrect Password | Analytics Dashboard";
			$page['errors'][] 	= "Incorrect user/password combination!";
			$this->load->view('header', $page);	
			$this->load->view('login', $page);
			$this->load->view('footer');
		} else {
            $detail = $this->Login_model->get_userdetail();            
			$session = $detail[0];
			$this->session->set_userdata('logged_in', $session);
            $this->Login_model->update();
			redirect('home', 'refresh');	
		}
	}
}

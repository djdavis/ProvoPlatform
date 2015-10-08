<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index() {
		// Page variables
		$page['title'] = "Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$page['user'] 	= $this->session->userdata('logged_in');
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			$this->load->view('header', $page);					
			$this->load->view('home');
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}
	
	public function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}
  

}

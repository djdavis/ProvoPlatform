<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roles extends CI_Controller {	

	public function index() {
		$page['title'] = "Roles | Analytics Dashboard";
        $page['user'] 	= $this->session-userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);		
		$this->load->view('roles/show_roles');
		$this->load->view('footer');
	}
  
	public function show() {		
		$this->load->model('Roles_model');
        $page['title'] = "Roles | Analytics Dashboard";
        $page['user'] 	= $this->session->userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);
        $page['roles'] = $this->Roles_model->get_roles();
		$this->load->view('roles/show_roles', $page);
        $this->load->view('footer');
	}
   
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {	
	public function index() {
		$page['title'] = "Users | Analytics Dashboard";
        $page['user'] 	= $this->session->userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);		
		$this->load->view('users/show_users');
		$this->load->view('footer');
	}
  
	public function show() {		
		$this->load->model('Users_model');
        $page['title'] = "Users | Analytics Dashboard";
        $page['user'] 	= $this->session->userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);
        if ($this->Users_model->get_user_count() > 0) { 
            $page['users'] = $this->Users_model->get_users();
			$this->load->view('users/show_users', $page);			
        } else {
            $page['errors'][] = $this->Users_model->get_error();
        }
        $this->load->view('footer');
	}
    
    public function edit() {
 		$this->load->model('Users_model');
        if ($this->input->get('id')) {
            $page['title'] = "Edit | Analytics Dashboard";
            $page['user'] 	= $this->session->userdata('logged_in');
            $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
            $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
            $this->load->view('header', $page);
            if ($this->Users_model->get_user_count() > 0) { 
                $page['users'] = $this->Users_model->get_users();
                $this->load->view('users/show_users', $page);			
            } else {
                $page['errors'][] = $this->Users_model->get_error();
            }
            $this->load->view('footer');
        } else {
            redirect('users/show', 'refresh');
        }
    }
}

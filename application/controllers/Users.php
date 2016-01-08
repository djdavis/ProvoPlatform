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
    
    public function add() {
 		$this->load->model('Users_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $page['title'] = "New User | Analytics Dashboard";
        $page['user'] 	= $this->session->userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
        $page['roles']  = $this->Users_model->get_roles();
        $this->load->view('header', $page);
        if ($this->Users_model->get_user_count() > 0) { 
            $page['users'] = $this->Users_model->get_users();
        }      


        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('role', 'Role', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('users/add_user', $page);
        } else {
            $newUser = array('user_fname' => $this->input->post('fname'),
                             'user_lname' => $this->input->post('lname'),
                             'user_email' => $this->input->post('email'),
                             'user_pass'  => $this->input->post('password'),
                             'user_role'  => $this->input->post('role')
                            );
            if ($this->Users_model->insert_user($newUser)) {
                redirect('users/show', 'refresh');
            } else {
                die('DB INSERT FAIL');
            }
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

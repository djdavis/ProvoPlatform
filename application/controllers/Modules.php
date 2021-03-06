<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modules extends CI_Controller {	

	public function index() {
		$page['title'] = "Modules | Analytics Dashboard";
        $page['user'] 	= $this->session-userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);		
		$this->load->view('modules/show_modules');
		$this->load->view('footer');
	}
  
	public function show() {		
		$this->load->model('Modules_model');
        $page['title'] = "Modules | Analytics Dashboard";
        $page['user'] 	= $this->session->userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);
        if ($this->Modules_model->get_module_count() > 0) { 
            $page['modules'] = $this->Modules_model->get_modules();
			$this->load->view('modules/show_modules', $page);			
        } else {
            $page['errors'][] = $this->Modules_model->get_error();
        }
        $this->load->view('footer');
	}
    
    public function edit() {
 		$this->load->model('Modules_model');
        if ($this->input->get('id')) {
            $page['title'] = "Edit | Analytics Dashboard";
            $page['user'] 	= $this->session->userdata('logged_in');
            $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
            $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
            $this->load->view('header', $page);
            if ($this->Modules_model->get_module_count() > 0) { 
                $page['modules'] = $this->Modules_model->get_modules();
                $this->load->view('modules/show_modules', $page);
            } else {
                $page['errors'][] = $this->Modules_model->get_error();
            }
            $this->load->view('footer');
        } else {
            redirect('modules/show', 'refresh');
        }
    }
}

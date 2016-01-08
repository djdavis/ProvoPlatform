<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends CI_Controller {
	
	public function index() {
		redirect('home', 'refresh');
	}
	
	public function view() {
    	$this->load->model('Stats_model');
    	$this->load->model('Page_model');
        $id = $this->input->get('id');
        $this->Page_model->set_id($id);
        if (!empty($id)) {
            $page['title']  = "Visitor Stats";
            $page['user'] 	= $this->session->userdata('logged_in');
            $page['page']   = $this->Page_model->get_page();
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			
			$page['visitors'] = $this->Stats_model->get_visitor_stats($id);
			$this->load->view('header', $page);					
			$this->load->view('stats/visitors_stats', $page);
			$this->load->view('footer', $page);
            
        } else {
            redirect('home', 'refresh');
        }  	
	}
    
	public function nwnw_view() {
    	$this->load->model('Stats_model');
    	$this->load->model('Page_model');
        //$id = $this->input->get('id');
        //$this->Page_model->set_id($id);
        $page['title']  = "NWNW Visitor Stats";
        $page['user'] 	= $this->session->userdata('logged_in');
        //$page['page']   = $this->Page_model->get_page();
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
        
        //$page['visitors'] = $this->Stats_model->get_visitor_stats($id);
        $this->load->view('header', $page);					
        $this->load->view('stats/nwnw_visitors_stats', $page);
        $this->load->view('footer', $page);
       	
	}    

	public function domains() {
		// Page variables
		$page['title'] = "Domains Stats | Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$this->load->model('Stats_model');
			
			$page['user'] 	 = $this->session->userdata('logged_in');
			$page['menu'] 	 = $this->load->view('sidebar', $page, TRUE);
			$page['footer']  = $this->load->view('inner_footer', $page, TRUE);
			
			$page['domains'] = $this->Stats_model->get_domain_stats();
			
			$this->load->view('header', $page);					
			$this->load->view('stats/domain_stats', $page);
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}
	
	public function visitors() {
		// Page variables
		$page['title'] = "Visitors Stats | Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$this->load->model('Stats_model');
			
			$page['user'] 	= $this->session->userdata('logged_in');
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			
			$page['visitors'] = $this->Stats_model->get_visitor_stats();
			
			$this->load->view('header', $page);					
			$this->load->view('stats/visitors_stats', $page);
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}
	
	public function downloads() {
		// Page variables
		$page['title'] = "Download Stats | Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$this->load->model('Stats_model');
			
			$page['user'] 	= $this->session->userdata('logged_in');
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			
			$page['downloads'] = $this->Stats_model->get_download_stats();
			
			$this->load->view('header', $page);					
			$this->load->view('stats/downloads_stats', $page);
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}

}

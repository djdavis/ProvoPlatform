<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends CI_Controller {
	
	public function index() {
		redirect('home', 'refresh');
	}

	public function domains() {
		// Page variables
		$page['title'] = "Domains Stats | Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$page['user'] 	= $this->session->userdata('logged_in');
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			$this->load->view('header', $page);					
			$this->load->view('stats/domain_stats');
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}
	
	public function visitors() {
		// Page variables
		$page['title'] = "Visitors Stats | Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$page['user'] 	= $this->session->userdata('logged_in');
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			$this->load->view('header', $page);					
			$this->load->view('stats/visitors_stats');
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}
	
	public function downloads() {
		// Page variables
		$page['title'] = "Download Stats | Analytics Dashboard";
		if($this->session->userdata('logged_in')) {
			$page['user'] 	= $this->session->userdata('logged_in');
			$page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
			$page['footer'] = $this->load->view('inner_footer', $page, TRUE);
			$this->load->view('header', $page);					
			$this->load->view('stats/downloads_stats');
			$this->load->view('footer', $page);
		} else {
			redirect('login', 'refresh');
		}
	}

}

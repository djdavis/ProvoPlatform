<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
	
	public function index() {
		redirect('home', 'refresh');
	}

	public function verizon() {
        $page['title'] = "Verizon Overview | Analytics Dashboard";
        $page['user'] 	= $this->session->userdata('logged_in');
        $page['menu'] 	= $this->load->view('sidebar', $page, TRUE);
        $page['footer'] = $this->load->view('inner_footer', $page, TRUE);
		$this->load->view('header', $page);
		$this->load->view('overviews/verizon', $page);
        $this->load->view('footer'); 
	}
}
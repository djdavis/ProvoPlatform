<?php
Class Stats_model extends CI_Model {
	
	private $domains;
	private $visitors;
	private $downloads;
		
	function __construct() {
		parent::__construct();
    }
	

	private function set_domain_stats() {		
		$this->db->select('id, domain, pageviews, unique_pageviews');
		$this->db->from('site_stats');
		
		$results = $this->db->get();
		if ($results->num_rows() > 0) {
			$this->domains = $results->result();
		} else {
			return false;
		}
	}
	
	public function get_domain_stats() {
		$this->set_domain_stats;
		return $this->domains;
	}

	private function set_visitor_stats() {
		$visitors = null;
		$this->visitors = $visitors;
	}
	
	public function get_visitor_stats() {
		$this->set_visitor_stats();
		return $this->visitors;
	}
	
	private function set_download_stats() {		
		$this->db->select('id, shortname, count, destination');
		$this->db->from('vc_pdflinks');
		
		$results = $this->db->get();
		if ($results->num_rows() > 0) {
			$this->downloads = $results->result();
		} else {
			return false;
		}
	}
	
	public function get_download_stats() {
		$this->set_download_stats();
		return $this->downloads;
	}
}
?>
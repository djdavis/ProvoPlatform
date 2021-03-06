<?php
Class Stats_model extends CI_Model {
	
	private $domains;
	private $visitors;
	private $downloads;
		
	function __construct() {
		parent::__construct();
    }
	
	public function get_domain_stats() {		
		$this->db->select('id, domain, pageviews, unique_pageviews');
		$this->db->from('site_stats');
		
		$results = $this->db->get();
		if ($results->num_rows() > 0) {
			$this->domains = $results->result();
			return $this->domains;
		} else {
			return false;
		}
	}

	public function get_visitor_stats($id) {
		$this->db->select('email,date,ip,city,state,source,referrer');
		$this->db->from('page_visitors');
		$this->db->where("page_id = '".$id."'");
		$this->db->order_by('date', 'desc');
		$results = $this->db->get();
		if ($results->num_rows() > 0) {
			return $results->result();
		} else {
			return false;
		}
	}
	
	public function get_download_stats() {		
		$this->db->select('id, shortname, count, destination');
		$this->db->from('vc_pdflinks');
		
		$results = $this->db->get();
		if ($results->num_rows() > 0) {
			$this->downloads = $results->result();
			return $this->downloads;
		} else {
			return false;
		}
	}
}
?>
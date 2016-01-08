<?php
Class Page_model extends CI_Model {
	private $id;
	private $page_data;
	private $error;
	
	public function __construct() {
		parent::__construct();
    }
	
    public function set_id($id) {
        $this->id = $id;
        self::find_page();
    }
    
    public function get_id() {
        return $this->id;
    }
    
	public function get_page() {
    	return $this->page_data;
	}


	
	public function get_error() {
		if (empty($this->error())) {
			return false;
		} else {
			return $this->error;
		}
	}
	
	private function set_error($error) {
		$this->error = $error;
	}
	
	private function find_page() {		
		$this->db->select('*');
        $this->db->where("page_id = '".$this->id."'");		
		$this->db->from('module_pages');
		$this->db->limit(1);
		$results  = $this->db->get();
        $num_rows = $results->num_rows();
		if ($num_rows > 0) {
			$this->page_data = array_values($results->result());
		} else {
			return false;
		}
	}
	
	
}
?>
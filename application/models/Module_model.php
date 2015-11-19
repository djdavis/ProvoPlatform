<?php
Class Module_model extends CI_Model {
	private $id;
	private $title;
	private $pages;
	private $error;
	
	function __construct($id) {
		parent::__construct();
        self::set_id($id);
		self::get_module();
		self::get_module_pages();
    }
	
    public function set_id($id) {
        $this->id = $id;
    }
    
    public function get_id() {
        return $this->id;
    }
    
	public function get_module() {
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
	
	private function find_module($id) {		
		$this->db->select('module_id,module_name,date_added');
        $this->db->where("module_id = '".$id."'");		
		$this->db->from('modules');
		$results  = $this->db->get();
        $num_rows = $results->num_rows();
		if ($num_rows > 0) {
			$this->set_module_count($num_rows);
			return $results->result();
		} else {
			return false;
		}
	}
}
?>
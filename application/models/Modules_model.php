<?php
Class Modules_model extends CI_Model {
	
	private $modules;
	private $module_count;
	private $error;
	
	function __construct() {
		parent::__construct();
		self::set_modules();
    }
	
	public function get_modules() {
        if (empty($this->modules)) {
            return false;
        } else {
            return $this->modules;
        }
	}
	
	public function set_modules() {
		$modules = $this->find_modules();
		if (!$modules) {
			$this->error = "Failed to retrive modules";
		} else {
			$this->modules = $modules;
		}
	}
	
	public function get_module_count() {
		return $this->module_count;
	}
	
	private function set_module_count($count) {
		$this->module_count = $count;
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
	
	private function find_modules() {		
		$this->db->select('module_id,module_name,date_added');
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
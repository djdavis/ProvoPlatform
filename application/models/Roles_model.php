<?php
Class Roles_model extends CI_Model {
	
	private $roles;
    
	function __construct() {
		parent::__construct();
		self::set_roles();
    }
	
	public function get_roles() {
        if (empty($this->roles)) {
            return false;
        } else {
            return $this->roles;
        }
	}
	
	public function set_roles() {
		$roles = $this->find_roles();
		if (!$roles) {
			//$this->error = "Failed to retrieve roles";
		} else {
			$this->roles = $roles;
		}
	}
    
	private function find_roles() {		
		$this->db->select('id,role');
		$this->db->from('admin_users_roles');
		
		$results  = $this->db->get();
        $num_rows = $results->num_rows();
		if ($num_rows > 0) {
			return $results->result();
		} else {
			return false;
		}
	}
}
?>
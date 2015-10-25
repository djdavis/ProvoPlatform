<?php
Class User_model extends CI_Model {
	
	private $error;
	
	function __construct() {
		parent::__construct();
    }
	
	public function get_user($user_id) {
		$this->db->select('user_id,user_fname,user_lname,user_email,last_logged,user_ip');
		$this->db->from('admin_users');
        $this->db->where('user_id', $user_id);		
		$results  = $this->db->get();
        $num_rows = $results->num_rows();
		if ($num_rows == 1) {
			return $results->result();
		} else {
            $this->set_error("Failed to retrieve user");
			return false;
		}
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
}
?>
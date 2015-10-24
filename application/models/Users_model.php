<?php
Class Users_model extends CI_Model {
	
	private $users;
	private $user_count;
	private $error;
	
	function __construct() {
		parent::__construct();
		self::set_users();
    }
	
	public function get_users() {
        if (empty($this->users)) {
            return false;
        } else {
            return $this->users;
        }
	}
	
	public function set_users() {
		$users = $this->find_users();
		if (!$users) {
			$this->error = "Failed to retrive users";
		} else {
			$this->users = $users;
		}
	}
	
	public function get_user_count() {
		return $this->user_count;
	}
	
	private function set_user_count($count) {
		$this->user_count = $count;
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
	
	private function find_users() {		
		$this->db->select('user_id,user_fname,user_lname,user_email,last_logged,user_ip');
		$this->db->from('admin_users');
		
		$results  = $this->db->get();
        $num_rows = $results->num_rows();
		if ($num_rows > 0) {
			$this->set_user_count($num_rows);
			return $results->result();
		} else {
			return false;
		}
	}
}
?>
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
		if (empty($this->error)) {
			return false;
		} else {
			return $this->error;
		}
	}
	
	private function set_error($error) {
		$this->error = $error;
	}

	public function get_roles() {
		$this->db->select('id, role');
		$this->db->from('admin_users_roles');
		$results 	= $this->db->get();
		$num_rows	= $results->num_rows();
		if ($num_rows > 0) {
			return $results->result();
		} else {
			return false;
		}
	}
	
    public function insert_user($data) {
        if ($this->db->insert('admin_users', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
	private function find_users() {		
		$this->db->select('a.user_id,a.user_fname,a.user_lname,a.user_email,a.last_logged,a.user_ip,b.role');
		$this->db->from('admin_users a');
		$this->db->join('admin_users_roles b','a.user_role=b.id', 'LEFT');
		
		$results  = $this->db->get();
        $num_rows = $results->num_rows();
		if ($num_rows > 0) {
			$this->set_user_count($num_rows);
			return $results->result();
		} else {
			$this->set_error("No users found!");
			return false;
		}
	}
}
?>
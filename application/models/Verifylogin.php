<?php
Class Verifylogin extends CI_Model {
		
	function __construct() {
		parent::__construct();
    }

	public function check($username, $password) {
		
		$this->db->select('user_id, user_email');
		$this->db->from('admin_users');
		$this->db->where('user_email', $username);
		$this->db->where('user_pass', md5($password));
		$this->db->limit(1);
		
		$results = $this->db->get();
		if ($results->num_rows() == 1) {
			return $results->result();
		} else {
			return false;
		}
	}
}
?>
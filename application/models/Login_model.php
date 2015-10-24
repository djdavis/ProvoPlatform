<?php
Class Login_model extends CI_Model {
	private $username;
    private $password;
    private $user_detail;
    public  $valid = 0;
    
	function __construct() {
		parent::__construct();
        date_default_timezone_set('America/Chicago');
    }
    
    public function validate($username, $password) {
        $this->set_username($username);
        $this->set_pass($password);
        if ($this->check()) {
            $this->valid = 1;
            return true;
        } else {
            return false;
        }
    }
    
    private function get_username() {
        return $this->username;
    }

    private function set_username($username) {
        $this->username = $username;
    }
    
    private function get_pass() {
        return md5($this->password);
    }
    
    private function set_pass($password) {
        $this->password = $password;
    }
    
    private function set_userdetail($detail) {
        $this->user_detail = $detail[0];
    }
    
    public function get_userdetail() {
        return $this->user_detail;
    }
    
	private function check() {		
		$this->db->select('user_id, user_fname, user_lname, user_email, last_logged');
		$this->db->from('admin_users');
		$this->db->where('user_email', $this->get_username());
		$this->db->where('user_pass',$this->get_pass());
		$this->db->limit(1);
		
		$results = $this->db->get();
		if ($results->num_rows() == 1) {
            $this->set_userdetail($results->result());
            return true;
		} else {
			return false;
		}
	}
    
    public function update() {
        $this->db->where('user_id', $this->user_detail->user_id);
        if ($this->db->update('admin_users', array('last_logged' => date('Y-m-d H:i:s')))) {
            return true;
        } else {
            $this->set_error("Error updating user record");
        }
    }
}
?>
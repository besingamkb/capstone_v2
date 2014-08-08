<?php 

class Users extends CI_Model {

	public function loginValidate() {
		$this->db->where("username", $this->input->get("username"));
		$this->db->where("password", md5($this->input->get("password")));
		$this->db->from("tbl_user");

		$query = $this->db->get();

		if ( $query->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getUlevel() {
		$this->db->select("ulevel");
		$this->db->where("username", $this->input->get("username"));
		$this->db->from('tbl_user');
		$query = $this->db->get();

		return $query->result();
	}
}
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

	public function userPagi($limit, $offset) {
		$q = $this->db->select("tbl_user.uid, tbl_user.empno, tbl_user.ulevel, tbl_user.username, tbl_user.datecreated, lib_ulevel.ulevelid, lib_ulevel.ulevelname")
			->from('tbl_user')
			->join('lib_ulevel', 'lib_ulevel.ulevelid = tbl_user.ulevel')
			->limit($limit, $offset);
		$ret['rows'] = $q->get()->result();

		$q = $this->db->select("COUNT(*) as count", FALSE)
			->from('tbl_user');

		$tmp = $q->get()->result();

		$ret['num_rows'] = $tmp[0]->count;

		return $ret;
	}
}
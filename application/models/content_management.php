<?php 


class Content_management extends CI_Model {


	public function getAll($limit) {
		$this->db->select("tbl_posts.*, tbl_user.uid, tbl_user.username");
		$this->db->from("tbl_posts");
		$this->db->join("tbl_user", "tbl_posts.uid = tbl_user.uid");
		$this->db->order_by("pid", "DESC");
		$this->db->limit($limit);
		$result = $this->db->get();
		return $result->result();
	}
}
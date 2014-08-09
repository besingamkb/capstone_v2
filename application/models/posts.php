<?php 

class Posts extends CI_Model {
	public function  getAllPosts() {
		$this->db->select("*");
		$this->db->order_by("pid", "desc");
		$this->db->join("tbl_user", "tbl_user.uid = tbl_posts.uid");
		$this->db->from("tbl_posts");
		$query = $this->db->get();
		return $query->result();
	}

	public function getPost($postId) {
		$this->db->select("*");
		$this->db->join("tbl_user", "tbl_user.uid = tbl_posts.uid");
		$this->db->from("tbl_posts");
		$this->db->where("pid", $postId);
		$query = $this->db->get();

		return $query->result();
	}
}
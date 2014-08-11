<?php 

class Map extends CI_Model {
	
	public function portmaps() {
		$this->db->select('*');
		$this->db->from('tbl_ports');

		$query = $this->db->get();

		return $query->result();
	}
}
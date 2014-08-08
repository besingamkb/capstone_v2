<?php 

class Logs extends CI_Model {

	public function saveLogs($logs) {
		$this->db->insert("tbl_logs", $logs);
	}

	public function getLogs() {
		$this->db->from("tbl_logs");
		$this->db->order_by('lid', 'desc');
		$this->db->limit(5);
		$return = $this->db->get();
		return $return->result();
	}

}
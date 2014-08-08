<?php 

class Employee extends CI_Model{

	function getAll() {
		$query = $this->db->get("tbl_employee");
		return $query->result();
	}


	// this function is only use to migrate employee to users due to revamp
	function addEmployeeIntoUser() {
		
	}

}
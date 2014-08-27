<?php 

class Mdepartment extends CI_Model {
	public function getAll() {
		$query = $this->db->query("SELECT * FROM lib_department");

		return $query->result();
	}

	public function records($deptid, $limits, $offset) {


		//results query
		$q = $this->db->select("tbl_employee.rkey, tbl_employee.empno, tbl_employee.surname, tbl_employee.firstname, tbl_employee.middlename, tbl_employee.address, tbl_employee.birthday, tbl_employee.age, tbl_employee.gender, tbl_employee.religion, tbl_employee.position, tbl_employee.deptid, tbl_employee.division, tbl_employee.datehire, tbl_employee.gsis, tbl_employee.philhealth, tbl_employee.tin, tbl_employee.ioe, tbl_employee.email, lib_department.deptname")
			->from('tbl_employee')
			->join('lib_department', 'lib_department.deptid = tbl_employee.deptid')
			->where('tbl_employee.deptid', $deptid)
			->limit($limits, $offset);
		$ret['rows'] = $q->get()->result();

		//count query
		$q = $this->db->select("COUNT(*) as count", FALSE)
			->where('tbl_employee.deptid', $deptid)
			->from('tbl_employee');

		$tmp = $q->get()->result();
		$ret['num_rows'] = $tmp[0]->count;

		return $ret;

	}
	
}
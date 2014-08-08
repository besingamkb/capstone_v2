<?php 
die("Forbiden");

class Test extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->emp();
	}

	private function makeUsername($firstname, $surname) {
		$lastname = str_replace(".", "", $surname);
		$lastname = str_replace(" ", "", $lastname);
		$lastname = strtolower($lastname);

		$firstname = $firstname[0];
		$firstname = strtolower($firstname);

		$username = $firstname . $lastname;

		return $username;
	}

	private function makePassword($firstname, $surname, $empno) {
		$username = $this->makeUsername($firstname, $surname);
		$empno = str_replace(" ", "", $empno);
		$password = $username . $empno;

		return $password;
	}

	function emp() {
		$this->load->model("employee");
		echo '<meta charset="UTF-8">';

		foreach($this->employee->getAll() as $row) {
			echo "username: " . $this->makeUsername($row->firstname, $row->surname);
			echo " ";
			echo "password: " . $this->makePassword($row->firstname, $row->surname, $row->empno);
			echo "<br>";

			$users = array(
				'empno' => $row->empno,
				'ulevel' => 4,
				'username' => $this->makeUsername($row->firstname, $row->surname),
				'password' => md5($this->makePassword($row->firstname, $row->surname, $row->empno))
			);

			$this->db->insert("tbl_user", $users);
		} 
	}

}
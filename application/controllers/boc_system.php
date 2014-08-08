<?php 

class Boc_system extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->dashboard();
	}

	public function dashboard() {
		$data['header']['title'] = "Admin Panel | Dashboard";
		$data['page'] = "pages/dashboard";

		$this->load->view("template", $data);
	}
}


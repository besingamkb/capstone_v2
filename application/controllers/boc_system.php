<?php 

class Boc_system extends MY_Controller {

	function __construct() {
		parent::__construct();

		if (!$this->session->userdata('is_logged')) {
			redirect(base_url() . "index.php/login");
		}
	}

	public function index() {
		$this->dashboard();
	}

	public function dashboard() {
		$data['header']['title'] = "Admin Panel | Dashboard";
		$data['page'] = "pages/dashboard";
		$data['logs'] = $this->logs->getLogs();


		$this->load->view("template", $data);
	}
}


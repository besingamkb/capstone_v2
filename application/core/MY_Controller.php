<?php 

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("html");
		$this->load->model("logs");
		$this->load->model("content_management", "cms"); 
	}

	public function logs($message, $username) {

		$username = $username;

		$logs = array(
			'logs_message' => $message,
			'username' => $username,
			'ip' => $_SERVER['REMOTE_ADDR']
		);

		$this->logs->saveLogs($logs);
	}

}
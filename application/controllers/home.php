<?php 

class Home extends MY_Controller {


	public function index() {
		$this->homepage();
	}	

	public function homepage() {
		$data['header']['title'] = "Welcome to BOC";
		$data['page'] = "pages/home";

		$this->load->view("template", $data);
	}

	public function about() {
		$data['header']['title'] = "About BOC";
		$data['page'] = "pages/about";
		$this->load->view("template", $data);
	}

	public function calendar() {
		$data['header']['title'] = "BOC Event calendar";
		$data['page'] = "pages/calendar";
		$this->load->view("template", $data);
	}
}

 ?>
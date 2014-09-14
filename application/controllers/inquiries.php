<?php 

class Inquiries extends MY_Controller {

	public function importance() {
		$data['header']['title'] = ucfirst(__FUNCTION__) . " | Inquiries Page";
		$data['page'] = "pages/inquiries_importance";
		$this->load->view("template", $data);
	}

	//PRIVILEGES
	public function privileges() {
		$data['header']['title'] = ucfirst(__FUNCTION__) . " | Inquiries Page";
		$data['page'] = "pages/inquiries_importance";
		$this->load->view("template", $data);
	}

	public function pri() {
		$data['header']['title'] = "PROBIHITED/RESTRICTION IMPORTATIONS | Inquiries Page";
		$data['page'] = "pages/pri";
		$this->load->view("template", $data);
	}
}	
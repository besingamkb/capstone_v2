<?php 

class Home extends MY_Controller {


	public function index() {
		$this->homepage();
	}	

	public function homepage() {

		$this->load->model("posts");
		$data['posts'] = $this->posts->getAllPosts();

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

	//single posts
	public function post() {
		$this->load->model("posts");
		$id = $this->uri->segment(3);

		$data['posts'] = $this->posts->getPost($id);
		foreach ($data['posts'] as $row) {
			# code...
			$title = $row->title;
		}

		$data['header']['title'] = $title;


		
		$data['page'] = "pages/singlepost";

		$this->load->view("template", $data);

	}
}

 ?>
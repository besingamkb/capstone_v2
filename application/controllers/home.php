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

	//port maps
	public function portmap() {
		$this->load->model('map');
		$data['header']['title'] = "Port Maps";
		$data['page'] = "pages/portmaps";

		$this->load->library('googlemaps');

		$config = array();
		$config['center'] = "manila, philippines";
		$config['zoom'] = "auto";
		$config['map_type'] = "ROADMAP";
		$config['map_height'] = "auto";
		$config['map_width'] = "auto";

		$this->googlemaps->initialize($config);
		//print_r($this->cms->portmaps());


		//marker
		$marker = array();

		foreach($this->map->portmaps() as $row) {
			$marker['position'] = $row->coordinate;
			$marker['infowindow_content'] = "<h5>" . $row->title . "</h5>";
			$this->googlemaps->add_marker($marker);
		}
		
		

		$data['map'] = $this->googlemaps->create_map();


		

		$this->load->view('template', $data);
	}

	public function contact() {
		/*$data['header']['title'] = "About BOC";
		$data['page'] = "pages/about";
		$this->load->view("template", $data);*/

		$data['header']['title'] = "Contact Page";
		$data['page'] = "pages/contact";
		$this->load->view("template", $data);
	}

	public function job_openings() {
		$data['header']['title'] = "Carrer Page";
		$data['page'] = "pages/jobs";
		$this->load->view("template", $data);
	}

	public function mapdata() {
		$this->load->model('map');
		contextJson();
		foreach ($this->map->portmaps() as $row) {
			echo "[" . "'" . $row->title . "'" . "],";
		}
		dprint($this->map->portmaps());
	}
}

 ?>
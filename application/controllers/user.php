<?php 

class User extends MY_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('is_logged')) {
			redirect(base_url() . "index.php/login");
		}
	}

	public function index() {
		redirect(base_url() . "index.php/user/all");
	}

	public function all($offset = 0) {
		$this->load->model('users');
		$this->load->library('pagination');

		$offset = (isset($offset)) ? $offset : 0;
		$limit = 10;

		$config = array();
		$config['base_url'] = base_url() . "index.php/user/all";
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;

		$result = $this->users->userPagi($limit, $offset);

		$data['result'] = $result['rows'];
		$data['num_results'] = $result['num_rows'];

		$config['total_rows'] = $data['num_results'];
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$data['header']['title'] = "Users | Dashboard";
		$data['page_title'] = "Users";
 		$data['page'] = "pages/users";
		$this->load->view("template", $data);
	}
}
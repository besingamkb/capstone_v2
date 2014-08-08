<?php 

class Login extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->loginpage();
	}

	public function loginpage() {
		if ($this->session->userdata('is_logged')) {
			redirect(base_url() . "index.php/boc_system");
		}
		$data['header']['title'] = "Users Login";
		$data['page'] = "pages/login";
		//dprint($this->session->all_userdata());

		$this->load->view("template", $data);
	}

	public function validate() {
		$this->load->model("users");

			
		//header('HTTP/1.0 400 Bad error');
		$validate = $this->users->loginValidate();
		foreach ($this->users->getUlevel() as $key => $value) {
			$ulevel = $value->ulevel;
		}
		if ( $validate == true ) {
			$sessionData = array(
				'is_logged' => 'true',
				'ulevel'	=> $ulevel,
				'user'		=> $this->input->get('username')
			);

			$this->session->set_userdata($sessionData);
			contextJson();
			echo json_encode(array('status' => 'success'));
		} else {
			contextJson();
			echo json_encode(array('status' => 'fail'));
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

?>
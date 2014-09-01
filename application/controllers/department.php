<?php 

class Department extends MY_Controller {
	function __construct() {
		parent::__construct();

		if (!$this->session->userdata('is_logged')) {
			redirect(base_url() . "index.php/login");
		}
	}

	public function index() {
		$this->load->model('mdepartment');
		$this->load->library('pagination');

		$subpage = $this->uri->segment(3);
		$offset = $this->uri->segment(4);
		$offset = (isset($offset)) ? $offset : 0;
		$limits = 10;

		//pagination
		$config = array();
		$config['base_url'] = base_url() . "index.php/department/index/$subpage";
		$config['per_page'] = $limits;
		$config['uri_segment'] = 4;

		switch($subpage) {
			case 1:
				$data['header']['title'] = "Top Management | Dashboard";
				$data['page_title'] = "Top Management";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(1, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 2:
				$data['header']['title'] = "Assesment and Operation Coordination | Dashboard";
				$data['page_title'] = "Assesment and Operation Coordination";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(2, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 3:
				$data['header']['title'] = "Intelligent Group | Dashboard";
				$data['page_title'] = "Intelligent Group";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(3, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 4:
				$data['header']['title'] = "Management Information System Technical Group | Dashboard";
				$data['page_title'] = "Management Information System Technical Group";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(4, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 5:
				$data['header']['title'] = "Interim Internal Control | Dashboard";
				$data['page_title'] = "Interim Internal Control";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(5, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 6:
				$data['header']['title'] = "Internal Administration Group | Dashboard";
				$data['page_title'] = "Internal Administration Group";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(6, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 7:
				$data['header']['title'] = "Revenue Collection Monitoring Group | Dashboard";
				$data['page_title'] = "Revenue Collection Monitoring Group";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(7, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 8:
				$data['header']['title'] = "Enforcement Group | Dashboard";
				$data['page_title'] = "Enforcement Group";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(8, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

			case 9:
				$data['header']['title'] = "Post Entry & Audit Group | Dashboard";
				$data['page_title'] = "Post Entry & Audit Group";
				$data['page'] = "pages/departmentpaginate";
				$result = $this->mdepartment->records(9, $limits, $offset);
				$data['result'] = $result['rows'];
				break;

		}
		$data['num_results'] = $result['num_rows'];
		$config['total_rows'] = $data['num_results'];
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view("template", $data);
	}

	public function page() {
		
	}

	public function add() {
		$this->load->model('mdepartment');
		$data['header']['title'] = "Add New Employee | Dashboard";
		$data['page_title'] = "ADD NEW EMPLOYEE";
		$data['page'] = "pages/departmentadd";
		$data['departments'] = $this->mdepartment->getAll();
		$this->load->view("template", $data);
	}

	public function validate() {
		//dprint($this->input->post());

		if (!$this->input->post()) {
			die("Not allowed! go back please");
		}

		$this->load->library('form_validation');

		$rules = array(
			array('field' => 'empno', 'label' => 'Employee No.', 'rules' => 'required'),
			array('field' => 'surname', 'label' => 'Lastname', 'rules' => 'required'),
			array('field' => 'firstname', 'label' => 'Firstname', 'rules' => 'required'),
			array('field' => 'middlename', 'label' => 'Middle Name', 'rules' => 'required'),
			array('field' => 'address', 'label' => 'Address', 'rules' => 'required'),
			array('field' => 'email', 'label' => 'Email Address', 'rules' => 'required'),
			array('field' => 'gender', 'label' => 'Gender', 'rules' => 'required'),
			array('field' => 'religion', 'label' => 'Religion', 'rules' => 'required'),
			array('field' => 'contact', 'label' => 'Contact', 'rules' => 'required'),
			array('field' => 'position', 'label' => 'Position', 'rules' => 'required'),
			array('field' => 'division', 'label' => 'Division', 'rules' => 'required'),
			array('field' => 'deptid', 'label' => 'Department', 'rules' => 'required'),
			array('field' => 'datehire', 'label' => 'Date Hire', 'rules' => 'required')

		);	
		//$this->form_validation->set_error_delimiters('<div class="alert alert-success" role="alert">', '</div>');
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == false) {
			$this->add();
		} else {
			//dprint($this->input->post());
			$this->db->insert('tbl_employee', $this->input->post());
			parent::logs("Add new employee.", $this->session->userdata('user'));

			$data['message'] = "Success adding new employee";
			$data['redirect_page'] = base_url() . "index.php/department/index/" . $this->input->post('deptid');
			$this->load->view('pages/singlealertpage', $data);
		}
	}

}
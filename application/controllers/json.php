<?php 

class Json extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function allContents() {
		contextJson();
		echo json_encode($this->cms->getAll(3));
	}

}

 ?>
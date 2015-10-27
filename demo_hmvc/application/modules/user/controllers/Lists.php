<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller {
	public function index(){
		$this->load->model('User');
		$data["rs"] = $this->User->getAll();
		$this->load->view('List',$data);
	}

}

/* End of file Lists.php */
/* Location: ./application/modules/user/controllers/Lists.php */
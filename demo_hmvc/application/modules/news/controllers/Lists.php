<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends MX_Controller {
	public function __construct(){
	}

	public function index()
	{
		$this->load->model('get_list');
		$data_list = ($this->get_list->get_all());
		$data = array(
			"data_list" => $data_list
			);
		$this->load->view('Lists',$data);
	}

}

/* End of file List.php */
/* Location: ./application/modules/news/controllers/List.php */
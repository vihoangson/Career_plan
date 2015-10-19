<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_list extends CI_Model {
	public function  get_all(){
		return ($this->db->get('news')->result_array());
	}
}

/* End of file get_list.php */
/* Location: ./application/modules/news/models/get_list.php */
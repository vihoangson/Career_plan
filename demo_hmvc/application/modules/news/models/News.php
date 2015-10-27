<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model {

	private $_tn = "news";
	private $_pk = "news_id";
	public function IU($data){
		$this->db->where($this->_pk,$data[$this->_pk]);
		if($this->db->count_all_results($this->_tn)==0){
			//insert
			$object = $data;
			if($this->db->insert($this->_tn, $object)){
				return true;
			}
			return false;
		}else{
			//update
			$object = $data;
			unset($object[$this->_pk]);
			$this->db->where($this->_pk, $data[$this->_pk]);
			if($this->db->update($this->_tn, $object)){
				return true;
			}
			return false;
		}		
	}

	public function getById($id){
		if(!$id) return false;
		$this->db->where('news_id', $id);
		$rs = $this->db->get('news')->row();
		if($rs){
			return $rs;
		}
		return false;
	}

	public function deleteById($id){
		if(!$id && !is_numeric($id)) return ;
		$this->db->where('news_id', $id);
		if($this->db->delete('news')){
			return true;
		}
		return false;
	}

}

/* End of file News.php */
/* Location: ./application/modules/news/models/News.php */
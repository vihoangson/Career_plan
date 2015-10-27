<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	private $_tn = "user";
	private $_pk = "user_id";
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

	public function getAll(){
		$rs =  $this->db->get($this->_tn)->result();
		if($rs){
			return $rs;
		}
		return false;
	}

	public function getById($id){
		if(!$id) return false;
		$this->db->where($this->_pk, $id);
		$rs = $this->db->get($this->_tn)->row();
		if($rs){
			return $rs;
		}
		return false;
	}

	public function deleteById($id){
		if(!$id && !is_numeric($id)) return ;
		$this->db->where($this->_pk, $id);
		if($this->db->delete($this->_tn)){
			return true;
		}
		return false;
	}

}

/* End of file user.php */
/* Location: ./application/modules/user/models/user.php */
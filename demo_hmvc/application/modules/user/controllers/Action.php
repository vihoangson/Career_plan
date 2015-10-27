<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	public function index()
	{
		
	}

	public function edit(){
		$this->load->model('User');
		$rs = $this->User->getById($this->uri->segment(4));
		$data["rs"]=$rs;
		$this->load->view('Edit',$data);
	}

	public function save_post(){
		
		// SET VALIDATION RULES
		$this->load->library('form_validation');
		$this->form_validation->set_rules( 'txt_title', 'Tiêu đề', 'required' );
		$this->form_validation->set_error_delimiters( '<em>','</em>' );
		if ( $this->input->post( 'login' ) ) {
			if ( $this->form_validation->run() ) {
				dd("save ^^");
			}
		}
		?>
			<?php if ( $this->session->flashdata( 'message')) : ?>
				<p><?php echo $this->session->flashdata( 'message' ); ?></p>
			<?php endif; ?>
		<?php
		$this->load->model('User');
		$data["user_id"] = $this->input->post("txt_id");
		$data["user_name"] = $this->input->post("txt_name");
		$data["user_address"] = $this->input->post("txt_address");
		$data["user_phone"] = $this->input->post("txt_phone");

		if($this->User->IU($data)){
			redirect('/user/','refresh');
		}else{
			redirect('/404','refresh');
		}
	}

	public function delete($id) 
	{
		$this->load->model('User');
		if($this->User->deleteById($id)){
			redirect('/user/','refresh');
		}else{
			redirect('/404','refresh');
		}
	}
   	

	public function add(){
		$this->load->view('Edit');
	}
}

/* End of file Action.php */
/* Location: ./application/modules/news/controllers/Action.php */
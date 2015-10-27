<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	public function index()
	{
		
	}

	public function edit(){
		$this->load->model('News');
		$rs = $this->News->getById($this->uri->segment(4));
		$data["rs"]=$rs;
		$this->load->view('edit',$data);
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
		$this->load->model('News');
		$data["news_id"]      = $this->input->post('txt_id');
		$data["news_title"]   = $this->input->post('txt_title');
		$data["news_content"] = $this->input->post('txt_content');
		if($this->News->IUNews($data)){
			redirect('/','refresh');
		}else{
			redirect('/404','refresh');
		}
	}

	public function delete($id) 
	{
		$this->load->model('News');
		if($this->News->deleteById($id)){
			redirect('/','refresh');
		}else{
			redirect('/404','refresh');
		}
	}
   	

	public function add(){
		$this->load->view('edit');
	}
}

/* End of file Action.php */
/* Location: ./application/modules/news/controllers/Action.php */
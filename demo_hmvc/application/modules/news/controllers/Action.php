<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	public function index()
	{
		
	}

	public function edit(){
		$this->load->view('edit');
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
		//dd($this->input->post('txt_title'));
	}
}

/* End of file Action.php */
/* Location: ./application/modules/news/controllers/Action.php */
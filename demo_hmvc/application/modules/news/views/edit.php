<?php $this->load->view('_includes/header'); ?>
	<?php if ( $this->session->flashdata( 'message' ) ) : ?>
		<p><?php echo $this->session->flashdata( 'message' ); ?></p>
	<?php endif; ?>
	<?= form_open('/news/action/save_post', '') ?>
		<div>
			<?php echo form_label( 'Tiêu đề', 'txt_title' ); ?>
			<p><?= form_input('txt_title', 'value',array("id"=>"txt_title","class"=>"form-control")); ?></p>
		</div>

		<div>
			<?php echo form_label( 'Nội dung', 'txt_content' ); ?>
			<p><?= form_textarea('txt_content', 'value',array("id"=>"txt_content","class"=>"form-control")); ?></p>
		</div>
		<div > <button class="btn btn-primary" type="submit"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Save </button></div>
	<?= form_close(); ?>
<?php $this->load->view('_includes/footer'); ?>

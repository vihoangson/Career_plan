<?php $this->load->view('_includes/header'); ?>
	<?php if ( $this->session->flashdata( 'message' ) ) : ?>
		<p><?php echo $this->session->flashdata( 'message' ); ?></p>
	<?php endif; ?>
	<?= form_open('/user/action/save_post', '') ?>
		<input type="hidden" value="<?= $this->uri->segment(4); ?>" name="txt_id">

		<div>
			<?php echo form_label( 'Họ và tên', 'txt_name' ); ?>
			<p><?= form_input('txt_name', (isset($rs)?$rs->user_name:""),array("id"=>"txt_name","class"=>"form-control")); ?></p>
		</div>

		<div>
			<?php echo form_label( 'Địa chỉ', 'txt_address' ); ?>
			<p><?= form_input('txt_address', (isset($rs)?$rs->user_address:""),array("id"=>"txt_address","class"=>"form-control")); ?></p>
		</div>

		<div>
			<?php echo form_label( 'Phone', 'txt_phone' ); ?>
			<p><?= form_input('txt_phone', (isset($rs)?$rs->user_phone:""),array("id"=>"txt_phone","class"=>"form-control")); ?></p>
		</div>

		<div > <button class="btn btn-primary" type="submit"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Save </button></div>
	<?= form_close(); ?>
<?php $this->load->view('_includes/footer'); ?>

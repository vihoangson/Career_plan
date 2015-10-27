<?php $this->load->view('_includes/header'); ?>
		<div class="col-md-12 col-lg-12">
			<a href="<?= base_url(); ?>news/action/add" class="btn btn-success"><span class="glyphicon glyphicon-add" aria-hidden="true"></span> Thêm mới</a>
			<hr>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Danh sách bản tin</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Content</th>
								<th>Cat</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($data_list as $key => $value) {
								?>
								<tr>
									<td><?php echo $value["news_id"] ?></td>
									<td><?php echo $value["news_title"] ?></td>
									<td><?php echo $value["news_content"] ?></td>
									<td><?php echo $value["news_cat"] ?></td>
									<td><a href="<?= base_url(); ?>news/action/edit/<?php echo $value["news_id"] ?>">Sửa</a> | <a href="<?= base_url(); ?>news/action/delete/<?php echo $value["news_id"] ?>">Xóa</a></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
<?php $this->load->view('_includes/footer'); ?>
<?php $this->load->view('_includes/header'); ?>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<a class="btn btn-success" href="<?= base_url(); ?>user/action/add">Add user</a>
						<hr>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Danh sách user</h3>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Họ và tên</th>
											<th>Địa chỉ</th>
											<th>Số điện thoại</th>
											<th></th>
										</tr>
									</thead>
									<tbody>

								<?php 
								if($rs){
									foreach ($rs as $key => $value) {
										?>
										<tr>
											<td><?= $value->user_id; ?></td>
											<td><?= $value->user_name; ?></td>
											<td><?= $value->user_address; ?></td>
											<td><?= $value->user_phone; ?></td>
											<td><a href="<?= base_url(); ?>user/action/edit/<?= $value->user_id; ?>">Edit</a> | <a href="<?= base_url(); ?>user/action/delete/<?= $value->user_id; ?>">Delete</a></td>
										</tr>
										<?php
									}
								}else{
									echo "<h3>Don't have data</h3>";	
								}
								 ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<img src="http://placehold.it/100x100" style="width:100%">
							</div>
						</div>
					</div>
<?php $this->load->view('_includes/footer'); ?>
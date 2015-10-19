<?php $this->load->view('_includes/header'); ?>
					<div class="col-md-10 col-lg-10">
						<center><img src="http://max-koder.com/wp-content/uploads/2015/09/patternhmvc.png"></center>
						<center><img src="http://gyazo.cybridge.jp/gyazo/da/02/47/da02474e69b7a37aca70096321bc2de8.png"></center>
						<a href="/news/action/add" class="btn btn-success"><span class="glyphicon glyphicon-add" aria-hidden="true"></span> Thêm mới</a>
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
												<td><a href="/news/action/edit<?php echo $value["news_id"] ?>">Sửa</a> | <a href="/news/action/delete/<?php echo $value["news_id"] ?>">Xóa</a></td>
											</tr>
											<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-lg-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<img src="http://placehold.it/100x100" style="width:100%">
							</div>
						</div>
					</div>
<?php $this->load->view('_includes/footer'); ?>
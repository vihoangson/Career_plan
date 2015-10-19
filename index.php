<?php
require("assets/class/plugin.php");
 ?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Santo - Career plan</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
		#screen{
			display: block;
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background: url("assets/gears.gif") no-repeat center center white;

		}
		</style>
	</head>
	<body>
		<div id="screen"></div>
		<div class="container">
			<div class="text-center">
				<h1>
					<span style="color:red;">Phát triển bản thân năm 2015</span>
					<?php echo count_time(); ?>
				</h1>

				<div class="content_div">

					<a href="https://github.com/vihoangson/Career_plan" target="_blank"><img src="assets/github-logo.png"></a>

					<div class="list-group">
						<a href="demo_hmvc" class="list-group-item">
							<h4 class="list-group-item-heading">HMVC</h4>
							<p class="list-group-item-text">Hierarchy of parent-child MCV layers</p>
						</a>
						<a href="sql_injection" class="list-group-item">
							<h4 class="list-group-item-heading">Sql injection</h4>
							<p class="list-group-item-text">Mô hình nhóm MVC độc lập</p>
						</a>
						<a href="Xss" class="list-group-item">
							<h4 class="list-group-item-heading">XSS</h4>
							<p class="list-group-item-text">Mô hình nhóm MVC độc lập</p>
						</a>
						<a href="phpunit" class="list-group-item">
							<h4 class="list-group-item-heading">Phpunit</h4>
							<p class="list-group-item-text">Mô hình nhóm MVC độc lập</p>
						</a>
					</div>

				</div>

				<center>
					<img src="assets/Career-image.png">
				</center>

			</div>
		</div>
		<!-- jQuery -->

		<script src="//code.jquery.com/jquery.js"></script>
		<script>
			$(window).load(function(){
				setTimeout(function() {
					$("#screen").fadeOut(200);
				}, 200);
			});
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>
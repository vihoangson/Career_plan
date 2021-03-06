<?php 
require "autoload.php";
	use CareerPlan\Regular;
 ?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Regular Expression</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar">
			<a class="navbar-brand" href="../">Career plan homepage</a>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Go back</a></li>
			</ul>
		</div>
		<div class="container">
			<?php 
				ob_start();
				require "regular_text_sample.php";
				$string = ob_get_contents();
				ob_end_clean();


			 ?>
			<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">Lấy tất cả các link</h3>
				  </div>
				  <div class="panel-body">
				  <?php 
					$match = Regular::get_all_link($string);
					echo "<pre>";
					var_dump($match[1]);
					echo "</pre>";
				   ?>

				  </div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>
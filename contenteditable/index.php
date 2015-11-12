<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Content Editable HTML5</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css" media="screen">
			div#mydiv {
				padding: 10px;
				border-radius: 8px;
			}
		</style>
	</head>
	<body>
		<div class="navbar">
			<a class="navbar-brand" href="../">Career plan homepage</a>
			<ul class="nav navbar-nav">
			</ul>
		</div>
		<div class="container">
			<h1>Content Editable HTML5</h1>
					<?php if($_POST["txt_name"]){
					?>
						<div class="well">
							<?php echo htmlentities($_POST["txt_name"]); ?>
						</div>
					<?php 
					} ?>

					<form method="post">
						<p><textarea name="txt_name" class="form-control"></textarea></p>
						<p><button class="btn btn-primary" type="submit">Submit</button></p>
					</form>
					<h3 class="well"> #mydiv just a div, you can paste HTML code to below box </h3>
					<div id="mydiv" contenteditable="true" style="border:1px solid #ccc;"></div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script>
		$('#mydiv').keyup(function(event){
				$("textarea").text($(this).html());
		});
		</script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>

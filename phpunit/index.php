<?php
require "autoload.php";
use CareerPlan\MyClass;
use CareerPlan\MyComponent\MyClass as MyClassTmp;
use CareerPlan\MyComponent\MyClass2;
use CareerPlan\MyComponent\MyClass2 as Single;
?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Santo - Php unit</title>

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
			background: url("../assets/gears.gif") no-repeat center center white;
			z-index: 1;
		}
		</style>
	</head>
	<body>
		<div class="navbar">
			<a class="navbar-brand" href="../">Career plan homepage</a>
			<ul class="nav navbar-nav">
			</ul>
		</div>
		<div id="screen"></div>
		<div class="container">
			<center>
				<a href="https://phpunit.de/" target="_blank">
					<img src="https://lh3.googleusercontent.com/-XyXQHJewDOk/VjAhg1I_x9I/AAAAAAAAAS4/T5hSrqZcEtU/s2048-Ic42/%25255BUNSET%25255D.png">
				</a>
			</center>

<hr>
<?php
		$sss = new MyClassTmp;
		echo $sss->function1();
		echo "<hr>";

		$m = new MyClass;
		echo $m->function1();
		echo "<hr>";


		echo "<hr>";

		echo $data[0]->entry->pr;
		echo "<hr>";

		$mmm = new MyClass2;
		echo $mmm->doAction();
		echo "<hr>";

		$mm = new Single;
		echo $mm->doAction();
		echo "<hr>";

 ?>
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
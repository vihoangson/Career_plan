<?php 
require "autoload.php";
use CareerPlan\DictionaryAPI\FindWord;
 ?><!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dictionary API</title>

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
			<div class="well">
				<center><img src="https://lh3.googleusercontent.com/-fB-t-QpcFNo/VjHFGEpWiiI/AAAAAAAAAUk/31ncshIAXfg/s2048-Ic42/%25255BUNSET%25255D.png"></center>
				<h3><a href="http://www.dictionaryapi.com/">Homepage</a></h3>
			</div>
			<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">Dictionary API</h3>
				  </div>
				  <div class="panel-body">
					<form action="" method="POST" role="form">
						<legend>Dictionary API</legend>
						<div class="form-group">
							<label for="">Word</label>
							<input type="text" class="form-control" id="" placeholder="Input field" name="txt_key" value="<?= ($_POST["txt_key"]?$_POST["txt_key"]:""); ?>">
						</div>
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
					<?php 
							$api = new FindWord;
							$word = $_POST["txt_key"];
							if($word){
								echo "<h1>$word</h1>";
								$data = $api->api_english($word);
								$wav = $data->entry->sound->wav;
								$fw = substr($wav, 0,1);
								$link = "http://media.merriam-webster.com/soundc11/$fw/$wav";
								if($link){
									echo "
										<audio autoplay class='audioplay'>
											<source src='$link' type='audio/wav'>
											Your browser does not support the audio element.
										</audio>
										<p><button class=' btn btn-default button_p'>Repeat</button></p>
									";
									echo "<h4>".$data->entry->hw."</h4>";
									echo "<h4>".$data->entry->pr."</h4>";
									echo "<ul>";
									foreach ((array)$data->entry->def->dt as $key => $value) {
										echo "<li>".$value."</li>";
									}
									echo "</ul>";
								?>
									<p><a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a></p>
									<div class="modal fade" id="modal-id">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">Modal title</h4>
												</div>
												<div class="modal-body">
													<pre><?php echo htmlentities(var_dump($data)); ?></pre>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
								<?php
								}
							}
					 ?>
				  </div>
			</div>

		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function() {
			$(".button_p").click(function(){
				$(".audioplay")[0].play();
			});
		});
		$(window).load(function(){
			setTimeout(function() {
				$("#screen").fadeOut(200);
			}, 200);
		});
		</script>
	</body>
</html>
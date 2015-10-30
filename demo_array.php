<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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

<?php

		$array = array("abc");

		//	1./Kiểm tra biến đó có phải là array hay không, nếu đúng thì thực hiện các bước tiếp theo.
		echo "<h1>1./Kiểm tra biến đó có phải là array hay không, nếu đúng thì thực hiện các bước tiếp theo.</h1>";
		if(is_array($array)){
			if(in_array("abc",$array)){
				echo "<h3>true</h3>";
			}else{
				echo "<h3>false</h3>";
			}
		}

		//	2./Đặt "@" trước tên hàm để khi không chạy được nó sẽ ko trả ra lỗi
		echo "<h1>2./Đặt \"@\" trước tên hàm để khi không chạy được nó sẽ ko trả ra lỗi</h1>";
		if(@in_array("abc",$array)){
			echo "<h3>true</h3>";
		}else{
			echo "<h3>false</h3>";
		}

		//	3./Ép kiểu cố định cho tham số truyền vào
		echo "<h1>3./Ép kiểu cố định cho tham số truyền vào</h1>";
		if(in_array("abc",(array)$array)){
			echo "<h3>true</h3>";
		}else{
			echo "<h3>false</h3>";
		}
?>



	<?php echo htmlentities($_POST["txt_name"]); ?>
	<form method="post">
		<p><textarea name="txt_name"></textarea></p>
		<p><button type="submit">Submit</button></p>
	</form>
	<button class="b_button">B</button>
	<button class="r_button">R</button>
	<div id="mydiv" contenteditable="true" style="border:1px solid #ccc;"></div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script>
			$('#mydiv').keypress(function(event){
					$("textarea").text($(this).html());
			});
			$(".b_button").click(function(){
				$("#mydiv").append("<strong>Bold</strong>");
			});
			$(".r_button").click(function(){
				$("#mydiv").append("<p>R</p>");
			});
			
		</script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>

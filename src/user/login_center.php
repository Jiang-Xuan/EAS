<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>请登录之后再操作</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	</style>
</head>
<body>
	<?php include '../tpl/nav.php' ?>
	<div class="container">
		<div class="alert alert-danger" role="alert">请您登陆之后再进行操作，在<span id="time">4</span>秒之后将跳到首页。</div>
	</div>
	<script>
	 jQuery(document).ready(function($) {
	 	var time = $('#time');
	 	var times = 3;

	 	setInterval(function() {
	 		console.log(times);
	 		time.text(times);
	 		times--;

	 		if(times === 0) {
	 			clearInterval();
	 			window.location = 'http://127.0.0.1';
	 		}
	 	}, 1000);
	 });
	</script>
</body>
</html>
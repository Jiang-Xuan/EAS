<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>学生端登录系统--扬州工业职业技术学院</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		.login {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px 0;
			height: 400px;
			text-align: center;
		}
		.form {
			padding: 20px 0;
			position: relative;
			z-index: 2;
		}
		h1 {
			color: white;
		}
		form input {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			outline: 0;
			border: 1px solid rgba(255, 255, 255, 0.4);
			background-color: rgba(255, 255, 255, 0.2);
			width: 250px;
			border-radius: 3px;
			padding: 10px 15px;
			margin: 0 auto 10px auto;
			display: block;
			text-align: center;
			font-size: 18px;
			color: rgb(255, 255, 255);
			-webkit-transition-duration: 0.25s;
			transition-duration: 0.25s;
			font-weight: 300;
		}
		.bg-bubbles {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1;
		}
		.wrapper {
			background: rgb(80, 163, 162);
			background: -webkit-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
			background: linear-gradient(to bottom right, rgb(80, 163, 162) 0%, rgb(83, 227, 166) 100%);
			position: absolute;
			top: 50px;
			left: 0;
			width: 100%;
			height: 400px;
			overflow: hidden;
		}
		form button {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			outline: 0;
			background-color: rgb(255, 255, 255);
			border: 0;
			padding: 10px 15px;
			color: rgb(83, 227, 166);
			border-radius: 3px;
			width: 250px;
			cursor: pointer;
			font-size: 18px;
			-webkit-transition-duration: 0.25s;
			transition-duration: 0.25s;
		}
		form button:hover {
			background-color: rgb(245, 247, 249);
		}
		form input:hover {
			background-color: rgba(255, 255, 255, 0.4);
		}
		form input:focus {
			background-color: rgb(255, 255, 255);
			width: 300px;
			color: rgb(83, 227, 166);
		}


		.bg-bubbles span {
		  position: absolute;
		  list-style: none;
		  display: block;
		  width: 40px;
		  height: 40px;
		  background-color: rgba(255, 255, 255, 0.15);
		  bottom: -160px;
		  -webkit-animation: square 25s infinite;
		  animation: square 25s infinite;
		  -webkit-transition-timing-function: linear;
		  transition-timing-function: linear;
		}
		.bg-bubbles span:nth-child(1) {
		  left: 10%;
		}
		.bg-bubbles span:nth-child(2) {
		  left: 20%;
		  width: 80px;
		  height: 80px;
		  -webkit-animation-delay: 2s;
		          animation-delay: 2s;
		  -webkit-animation-duration: 17s;
		          animation-duration: 17s;
		}
		.bg-bubbles span:nth-child(3) {
		  left: 25%;
		  -webkit-animation-delay: 4s;
		          animation-delay: 4s;
		}
		.bg-bubbles span:nth-child(4) {
		  left: 40%;
		  width: 60px;
		  height: 60px;
		  -webkit-animation-duration: 22s;
		          animation-duration: 22s;
		  background-color: rgba(255, 255, 255, 0.25);
		}
		.bg-bubbles span:nth-child(5) {
		  left: 70%;
		}
		.bg-bubbles span:nth-child(6) {
		  left: 80%;
		  width: 120px;
		  height: 120px;
		  -webkit-animation-delay: 3s;
		          animation-delay: 3s;
		  background-color: rgba(255, 255, 255, 0.2);
		}
		.bg-bubbles span:nth-child(7) {
		  left: 32%;
		  width: 160px;
		  height: 160px;
		  -webkit-animation-delay: 7s;
		          animation-delay: 7s;
		}
		.bg-bubbles span:nth-child(8) {
		  left: 55%;
		  width: 20px;
		  height: 20px;
		  -webkit-animation-delay: 15s;
		          animation-delay: 15s;
		  -webkit-animation-duration: 40s;
		          animation-duration: 40s;
		}
		.bg-bubbles span:nth-child(9) {
		  left: 25%;
		  width: 10px;
		  height: 10px;
		  -webkit-animation-delay: 2s;
		          animation-delay: 2s;
		  -webkit-animation-duration: 40s;
		          animation-duration: 40s;
		  background-color: rgba(255, 255, 255, 0.3);
		}
		.bg-bubbles span:nth-child(10) {
		  left: 90%;
		  width: 160px;
		  height: 160px;
		  -webkit-animation-delay: 11s;
		          animation-delay: 11s;
		}
		@-webkit-keyframes square {
		  0% {
		    -webkit-transform: translateY(0);
		            transform: translateY(0);
		  }
		  100% {
		    -webkit-transform: translateY(-700px) rotate(600deg);
		            transform: translateY(-700px) rotate(600deg);
		  }
		}
		@keyframes square {
		  0% {
		    -webkit-transform: translateY(0);
		            transform: translateY(0);
		  }
		  100% {
		    -webkit-transform: translateY(-700px) rotate(600deg);
		            transform: translateY(-700px) rotate(600deg);
		  }
		}
	</style>
</head>
<body>
	<?php include '../tpl/nav.php' ?>
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="login">
					<h1>欢迎您</h1>
					<form action="login_handle.php" method="post" class="form">
						<input type="text" name="username" placeholder="用户名" required>
						<input type="password" name="password" placeholder="密码" required>
						<button type="submit" id="login-button">登录</button>
					</form>
				</div>
				<div class="bg-bubbles">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
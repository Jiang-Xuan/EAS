<?php 
	session_start();

	if(!empty($_SESSION['login-status'])) {
		$status = '注销';
		$url = 'logout';
	} else {
		$status = '登录';
		$url = 'login';
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<title>基于移动设备的学生端掌上教务系统</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		.navbar {
			margin-bottom: 0;
		}
		#login .modal-body {
			overflow: hidden;
			padding: 0;
		}
	</style>
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
			/*position: absolute;*/
			/*top: 50px;*/
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

		.jumbotron {
			margin: 0;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#导航">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="http://127.0.0.1/src/" class="navbar-brand">学生端</a>
					</div>
					<div class="collapse navbar-collapse" id="导航">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">教务活动<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="http://127.0.0.1/jiaoxuepingjia.php">教学评价</a></li>
									<li><a href="jiaowuhuodong/gongxuanxuanke.php">公选选课</a></li>
									<li><a href="jiaowuhuodong/banjikebiao.php">班级课表</a></li>
									<li><a href="jiaowuhuodong/kaoshiricheng.php">考试日程</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">成绩查询<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="chengjichaxun/zhuanyekechengchaxun.php">专业课程查询</a></li>
									<li><a href="chengjichaxun/yingyudengjichaxun.php">英语等级查询</a></li>
									<li><a href="chengjichaxun/diannaodengjichaxun.php">电脑等级查询</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">其他操作<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="qitacaozuo/yonghubangding.php">用户绑定</a></li>
									<li><a href="qitacaozuo/jiaoshixinxi.php">教师信息</a></li>
									<li><a href="qitacaozuo/xuexiaodaohang.php">学校导航</a></li>
									<li><a href="qitacaozuo/shiyongshuoming.php">使用说明</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="jumbotron">
		<div class="container">
			<h1>欢迎您，<?php if(!empty($_SESSION['username'])){
				echo $_SESSION['username'];
				} else { echo '用户';} ?>！</h1>
			<p>这里是扬州工业职业技术学院学生端教务系统。</p>
			<p>请您选择 <a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#<?php echo $url; ?>"><?php echo $status; ?></a></p>
		</div>
	</div>

	<!-- .注销的模态框 -->
	<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="modal label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
						<h4 class="modal-title">确定注销吗？</h4>
				</div>
				<div class="modal-body">
					<p>注销之后所有查询都要重新登录！</p>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-default" data-dismiss="modal">返回</a>
					<a type="button" class="btn btn-danger" href="src/user/logout.php">确定注销</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.注销的模态框 -->
	<!-- .登录的模态框 -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modal label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4>登录</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="wrapper">
								<div class="login">
									<h1>欢迎您</h1>
									<form action="src/user/login_handle.php" method="post" class="form">
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
				</div>
			</div>
		</div>
	</div>
	<!-- /.登陆的模态框 -->
	<style>
		footer {
			background-color: rgb(36, 34, 63);
			color: #ccc;
		}
	</style>
	<footer class="container-fluid ng-info">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5 class="page-header">网站信息</h5>
					<p>苏:123456789C</p>
					<p>©2016 </p>
				</div>
				<div class="col-md-4">
					<h5 class="page-header">ISSUE</h5>
					<p>联系方式：645762213@qq.com</p>
				</div>
				<div class="col-md-4">
					<h5 class="page-header">网站源码</h5>
					<p>本网站源码托管于<a href="https://github.com" target="_blank">Github</a></p>
					<p>网站服务器为<a href="https://aliyun.com" target="_blank">阿里云</a></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>

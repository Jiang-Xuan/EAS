<?php 
	session_start();

	if(!empty($_SESSION['login-status'])) {
		$status = '注销';
		$url = 'logout.php';
	} else {
		$status = '登录';
		$url = 'login.php';
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
			<p>请您选择 <a href="src/user/<?php echo $url; ?>" class="btn btn-primary btn-lg" role="button"><?php echo $status; ?></a></p>
		</div>
	</div>
</body>
</html>
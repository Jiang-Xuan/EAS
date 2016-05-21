<?php 
	session_start();
	header('Content-Type:text/html;charset=utf-8');
	date_default_timezone_set('Asia/Shanghai');

	// print_r($_SESSION);

	if(!empty($_SESSION['login-status']) && $_SESSION['login-status']) {
		$link = @mysql_connect('127.0.0.1', 'root', '');

		mysql_select_db('xscjdb');

		// print_r($_SESSION);

		mysql_query('set names utf8');


		$username = $_SESSION['username'];

		// print_r("SELECT * FROM 学生成绩表 WHERE 姓名 = $username");
		
		$dataAdd = mysql_query("SELECT 班号,学号,班级名称,姓名,学年 FROM 学生成绩表 WHERE 姓名 = '$username'");

		$data = mysql_fetch_assoc($dataAdd);

		// print_r($data);
	}else {
		echo '<script>window.location="login_center.php"</script>';
		die();
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>专业课程查询</title>
 	<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
 	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
 	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 	<style>
		table {
			table-layout: ;
		}
 	</style>
 </head>
 <body>
 	<?php include '../tpl/nav.php' ?>
 	<div class="container">
 		<div class="page-header">个人信息：</div>
			<ul class="list-unstyled list-inline text-center">
				<li><strong>班号：</strong><?php echo $data['班号'] ?></li>
				<li><strong>学号：</strong><?php echo $data['学号'] ?></li>
				<li><strong>班级名称：</strong><?php echo $data['班级名称'] ?></li>
				<li><strong>姓名：</strong><?php echo $data['姓名'] ?></li>
				<li><strong>学年：</strong><?php echo $data['学年'] ?></li>
			</ul>
 		<div class="page-header">您查询的专业课程结果为：</div>
		<?php 
			$dataAdd = mysql_query("SELECT 课程名称,成绩 FROM 学生成绩表 WHERE 姓名='$username'");
			$courseNum = mysql_num_rows($dataAdd);
			// echo $courseNum;
		 ?>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<td>课程名称：</td>
						<?php while($data = mysql_fetch_assoc($dataAdd)) { ?>
						<td><?php echo $data['课程名称'] ?></td>
						<?php } 
							@mysql_data_seek($dataAdd, 0);
						?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>专业成绩：</td>
						<?php while($data = mysql_fetch_assoc($dataAdd)) { ?>
						<td><?php echo $data['成绩'] ?></td>
						<?php } ?>
					</tr>
				</tbody>
			</table>

			
 		<h4 class="text-right">查询结束</h4>
 	</div>
 </body>
 </html>
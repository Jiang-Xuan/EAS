<?php 
	header('Content-Type:text/html;charset=utf-8');
	date_default_timezone_set('Asia/Shanghai');

	if(!empty($_SESSION['login-status']) && $_SESSION['login-status']) {
		
	}else {
		echo '请登录之后操作！<script>setTimeout(function(){
			window.location = "login.php";
		},3000)</script>';
	}
	die();
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
			table-layout: fixed;
		}
 	</style>
 </head>
 <body>
 	<?php include '../tpl/nav.php' ?>
 	<div class="container">
 		<table class="table table-bordered table-hover">
 			<caption>您查询的专业课程结果为：</caption>
 			<thead>
 				<tr>
 					<td>专业课名：</td>
 					<td>网页设计与制作</td>
 					<td>C#应用程序设计</td>
 					<td>SQL Server应用技术</td>
 					<td>计算机组装与维护</td>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td>专业成绩：</td>
 					<td class="success">及格</td>
 					<td class="info">优秀</td>
 					<td class="danger">不合格</td>
 					<td class="success">66</td>
 				</tr>
 			</tbody>
 			<tfoot></tfoot>
 		</table>
 		<table class="table table-bordered table-hover">
 			<thead>
 				<tr>
 					<td>专业课名：</td>
 					<td>锋利的jQuery</td>
 					<td>Node.js实战</td>
 					<td>精通Nginx</td>
 					<td>图解TCP/IP</td>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td>专业成绩：</td>
 					<td class="success">及格</td>
 					<td class="success">及格</td>
 					<td class="info">优秀</td>
 					<td class="info">100</td>
 				</tr>
 			</tbody>
 		</table>
 		<h4 class="text-right">查询结束</h4>
 	</div>
 </body>
 </html>
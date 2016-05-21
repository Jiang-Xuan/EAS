<?php 
	session_start();
	date_default_timezone_set('Asia/Shanghai');

	@mysql_connect('127.0.0.1', 'root', '');

	mysql_select_db('xscjdb');

	if(empty($_SESSION['login-status'])) {
		$_SESSION['login-status'] = true;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
	}

	echo "<script>window.location = \"http://127.0.0.1\"</script>";

	

 ?>
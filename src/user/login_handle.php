<?php 
	session_start();
	date_default_timezone_set('Asia/Shanghai');

	if(empty($_SESSION['login-status'])) {
		$_SESSION['login-status'] = true;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
	}

	

 ?>
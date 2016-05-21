<?php 
	session_start();

	session_unset();
	session_destroy();

	echo "<script>window.location='http://127.0.0.1'</script>";
 ?>
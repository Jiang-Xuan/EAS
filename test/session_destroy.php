<?php 
	session_start();
	if (session_is_registered(login)) {
		
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>session_destroy</title>
 </head>
 <body>
 	<?php print_r($_SESSION) ?>
 </body>
 </html>
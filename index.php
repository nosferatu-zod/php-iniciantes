<!DOCTYPE html>

<html lang="pt_BR">

<head>
	<meta charset="UTF-8">
	<title>PHP com MySQLi para Iniciantes</title>
</head>

<body>

	<?php

		require 'config.php';
		require 'connection.php';
		
		$link = DBConnect();

		DBClose($link);

	?>
</body>
</html>	
	
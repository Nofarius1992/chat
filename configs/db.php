<?php 
	// данные для подключения к базе данных
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "chat";

	// подключение к базе данный Чат
	$connect = mysqli_connect($server, $username, $password, $dbname);
 ?>
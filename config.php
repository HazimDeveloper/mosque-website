<?php
	$hostname = "localhost";
	// $hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "masjid";
			
	//connect to phpmyadmin
	$connect = mysqli_connect($hostname, $username, $password, $dbname)
			OR DIE ("Connection failed!");

?>

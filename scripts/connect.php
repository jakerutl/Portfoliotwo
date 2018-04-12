<?php

	// $user = "jaker145";
	// $pass = "rutledge12";
	// $url = "jakerutledgecom.domaincommysql.com";
	// $db = "db_about";

	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "db_about";

	// $link = mysqli_connect($url, $user, $pass, $db);
	$link = mysqli_connect($url, $user, $pass, $db, "8889");

	if(mysqli_connect_errno()) {
		printf("Connection Failed: %s\n", mysqli_connect_error());
		exit();
	}

?>

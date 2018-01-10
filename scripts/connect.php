<?php

	$user = "jaker145";
	$pass = "rutledge12";
	$url = "jakerutledgecom.domaincommysql.com";
	$db = "db_about";

	$link = mysqli_connect($url, $user, $pass, $db);

	if(mysqli_connect_errno()) {
		printf("Connection Failed: %s\n", mysqli_connect_error());
		exit();
	}



?>

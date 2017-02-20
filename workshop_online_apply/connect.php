<?php
	$connect ="localhost";
	$db_user="wws2015user";
	$db_password="Justsmile2015";
	$db_select="wws2015db";

	$objConnect=mysqli_connect($connect, $db_user, $db_password, $db_select);

	if(!$objConnect) {
		echo "db error";
	}

	mysqli_query($objConnect, "SET NAMES UTF8");

?>
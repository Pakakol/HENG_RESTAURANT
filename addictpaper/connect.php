<?php
	
	$connect ="localhost";
	$db_user ="root";
	$db_password="";
	$db_select="addict_paper";


	$objConnect = mysqli_connect($connect,$db_user,$db_password,$db_select);

	if (!$objConnect) {
		
		echo "db error";
	}


	mysqli_query($objConnect,"SET NAME UTF8");

?>
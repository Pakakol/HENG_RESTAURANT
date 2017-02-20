<?php

	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	// รับแบบ POST

	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	//รับแบบ REQUEST

	
	echo $fname."  ".$lname;


?>
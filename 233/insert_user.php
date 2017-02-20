<?php

	require("dbconnect.php");

	$pass = true;

	if(!empty($_POST['username']))
	{

		$username = mysqli_escape_string($link,$_POST['username']);

	}else{

		$pass = false;
	}

	if(!empty($_POST['password']))
	{

		$password = mysqli_escape_string($link,$_POST['password']);

	}else{

		$pass = false;
	}

	if(!empty($_POST['email']))
	{

		$email = mysqli_escape_string($link,$_POST['email']);

	}else{

		$pass = false; //เอาไว้เช็คถ้าไม่กรอกอีเมลล์ไม่ให้ผ่าน
	}

	if(!empty($_POST['display_name']))
	{

		$displayname = mysqli_escape_string($link,$_POST['display_name']);

	}else{

		$pass = false;
	}

	//เช็คขนาดของสตริง ถ้ามันว่าง คือ = 0 จะไม่ให้ผ่าน
	if(strlen($username) <= 0 || strlen($password) <=0 || strlen($email) <=0 || strlen($displayname) <=0)
	{
		$pass = false;

	}

	if($pass)
	{
		$sql = "INSERT INTO account (user_id,username,password,email,display_name)
				VALUES (0,'$username','$password','$email','$displayname')";

				

		$query = mysqli_query($link,$sql) or die("Query Error!");

		include("search_userid.php");


	}


?>
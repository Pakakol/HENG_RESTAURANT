<?php
	
	require './connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$student_ID = $_POST['student_ID'];
	$email = $_POST['email'];




	$sql ="INSERT INTO customer (username,password,name,surname,student_ID,email) 
		   VALUES ('{$username}','{$password}','{$name}','{$surname}','{$student_ID}','{$email}')";

    $query = mysqli_query($objConnect,$sql);


    if (!$query) {
    	
    	echo "Error";
    }else{
    	
    	
    	header('location:login.php');

    }

?>
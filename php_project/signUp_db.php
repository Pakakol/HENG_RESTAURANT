<?php
	
	require './connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];




	$sql ="INSERT INTO customer (customer_username,customer_password,customer_name,customer_surname,customer_email) 
		   VALUES ('{$username}','{$password}','{$name}','{$surname}','{$email}')";

    $query = mysqli_query($objConnect,$sql);


    if (!$query) {
    	
    	echo "error";

    }else{
    	
    	header('location:index.php');

    }

?>
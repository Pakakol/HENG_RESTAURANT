<?php 
	require './connect.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$type = $_POST['type'];
	$papersize = $_POST['[papersize]'];
	$color = $_POST['color'];
	$types = $_POST['types'];
	$id_payment = $_POST['payment'];

	$sql ="INSERT INTO paperwork (type,papersize,color,types) 
		   VALUES ('{$type}','{$password}','{$name}','{$surname}','{$email}')";
	




 ?>
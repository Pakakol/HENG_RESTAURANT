<?php
	
	require './connect.php';

	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$type = $_POST['type'];
	$other = $_POST['other'];
	$details = $_POST['details'];
	$memberId = $_POST['memberId'];


	

	//ตรงนี้ต้องชื่อฟิลตรงกับในดาต้าเบส

	$sql ="INSERT INTO Contact_work (contactName,contactSurname,contactTel,contactEmail,contactWorkType,contactOther,contactDetails,memberId) 
		   VALUES ('{$name}','{$surname}','{$tel}','{$email}','{$type}','{$other}','{$details}','{$memberId}')";

    $query = mysqli_query($objConnect,$sql);


    if (!$query) {
    	
    	echo "Error";
    }else{
    	
    	
    	header('location:contact_success.php');

    }

?>
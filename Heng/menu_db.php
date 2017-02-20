<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>

  
	<?php
	
	require './connect.php';

	$food_name = $_POST['food_name'];
	$amount = $_POST['amount'];
	$price = $_POST['price'];
	


	$sql ="INSERT INTO Order (food_name,amount,price) 
		   VALUES ('{$food_name}','{$amount}','{$price}')";

    $query = mysqli_query($objConnect,$sql);

	if (!$query) {
    	
    	echo "Error";
    }else{
    	
    	
    	header('location:menu.php');

    }

?>

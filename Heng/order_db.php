<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>

  
	<?php
	
	require './connect.php';

	// $food_name = $_POST['food_name'];
	// $amount = $_POST['amount'];
	// $price = $_POST['price'];
	$name_customer = $_POST['name_customer'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];


	$sql ="INSERT INTO Order (food_name,amount,price,name_customer,address,tel) 
		   VALUES ('{$name_customer}','{$address}','{$tel}')";

    $query = mysqli_query($objConnect,$sql);

	if (!$query) {
    	
    	echo "Error";
    }else{
    	
    	
    	header('location:news_success.php');

    }

?>

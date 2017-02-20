<html>
<head>
	<meta charset="utf-8">
	<title>INCORRECT LOG IN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

<?php
	require'./connect.php';
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];



	$sql ="SELECT * FROM customer WHERE customer_username='{$username}' AND customer_password='{$password}' ";
	$query = mysqli_query($objConnect,$sql);

	$rows = mysqli_fetch_array($query);

	if ($rows) {

		$_SESSION['customer_name'] = $rows['customer_name'];
		$_SESSION['customer_surname'] = $rows['customer_surname'];

		header('location:index.php');

	}else{
	?>
		<center>
		<div id="check-login">
		<h3>PLEASE LOG IN AGAIN !!!</h3>
		<br><br>
		<a href='login.php'>LOG IN</a>
		</div>
		</center>

		<script type="text/javascript">
			alert("incorrect username or password");
		</script>

<?php

	}

?>

</body>
</html>

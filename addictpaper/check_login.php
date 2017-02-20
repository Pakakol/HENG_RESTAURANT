<html>
<head>
	<meta charset="utf-8">
	<title>INCORRECT LOG IN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">

	
</head>
<body>

<?php
	error_reporting (E_ALL ^ E_NOTICE);
	require'./connect.php';
	session_start();
	$_SESSION["online"] = 0;

	$username = $_POST['username'];
	$password = $_POST['password'];





	$sql ="SELECT * FROM customer WHERE username='{$username}' AND password='{$password}' ";
	$query = mysqli_query($objConnect,$sql);

	$rows = mysqli_fetch_array($query);


	$_SESSION['status'] = $rows['Type_c'];

	if ($_SESSION["status"] == "Admin") {
			$_SESSION["online"] = 1;
			$_SESSION['username'] = $username;
			header('location:adminindex.php');

		}else if ($_SESSION["status"] == "Member"){
			$_SESSION["online"] = 2;
			$_SESSION['username'] = $username;
			
			header('location:index.php');
		}
		else {
			
			echo "Please Login";
		}

	

?>
		

</body>
</html>

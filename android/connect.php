
<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$db_name = "budgetmee";
	$conn = mysqli_connect($host,$user,$password,$db_name);
	if (!$conn) {
			echo "error".mysqli_connect_errno();
		}
	mysqli_query($conn,"SET NAMES UTF8");
?>
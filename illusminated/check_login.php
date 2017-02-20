<html>
<head>
	<meta charset="UTF-8">
	<title>INCORRECT LOG IN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body style="background:white;">

<?php
	require'./connect.php';
	session_start();

	mysqli_real_escape_string($objConnect, $_POST['username']);
	$username = $_POST['username'];
	$password = $_POST['password'];
	// $name = $_POST['name'];



	$sql ="SELECT * FROM member WHERE memberUsername='{$username}' AND memberPassword='{$password}' ";
	$query = mysqli_query($objConnect,$sql);

	$rows = mysqli_fetch_array($query);
	$memberStatus = $rows['memberStatus'];
	$memberType = $rows['memberType'];

	if (!$rows || $memberStatus=='0') { 

		if ($memberStatus=='0') {
		?>
		<center>
		<div class="check-login">
		<a href="home.php"><img src="images/logo2.png"></a> <br>
		<h3>The username or password is incorrect !</h3>
		<p>Please Log in again !!!</p> <br>
		<!-- <a href='logIn.php'>LOG IN</a> -->
		<div class="button wobble-horizontal"><a href='login.php'><button class="button-account">Back to log in again !</button></a></div>
		</div>
		</center>

		<?php
		}
		 else {
		?>


		<center>
		<div class="check-login">
		<a href="home.php"><img src="images/logo2.png"></a><br><br><br><br>
		<h3>The username or password is incorrect !</h3>
		<p>Please Log in again !!!</p> <br>
		<!-- <a href='logIn.php'>LOG IN</a> -->
		<div class="button wobble-horizontal"><a href='login.php'><button class="button-account">Back to log in again !</button></a></div>
		</div>
		</center>

		<script type="text/javascript">
			alert("The username or password is incorrect !");
		</script>



		<?php
		}
	}else{

		$_SESSION['memberUsername'] = $rows['memberUsername'];
		$_SESSION['memberPassword'] = $rows['memberPassword'];
		$_SESSION['memberName'] = $rows['memberName'];
		$_SESSION['memberProfilePicture'] = $rows['memberProfilePicture'];
		$_SESSION['memberId']=$rows['memberId'];
		$_SESSION['memberType']=$rows['memberType'];
		
		// echo $membersStatus;

		if($memberType=='customer' && $memberStatus=='1')
			{
				header("location:home.php");
			}

			elseif ($memberType=='designer' && $memberStatus=='1') {
				header("location:home.php");
			}

			else if($memberType=='admin' && $memberStatus=='1'){
				header("location:adminpage.php");
			}

		// header('location:menu_bar.php');

	}

	?>


		

</body>
</html>

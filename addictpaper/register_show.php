<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up : confirm</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style_register.css">
</head>
<body>
	<center>
	<div id="sign_up">
	<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$student_ID = $_POST['student_ID'];
		$email = $_POST['email'];
	?>
	<form action="register_db.php" method="POST">
		<br><br><br><br>
		<h3>COMFIRM</h3><br><br>
		Username : &nbsp; <input type="text" name="username" value="<?=$username?>" readonly>
		<br><br>
		Password : &nbsp; <input type="text" name="password" value="<?=$password?>" readonly>
		<br><br>
		Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="<?=$name?>" readonly>
		<br><br>
		Surname : &nbsp;&nbsp;<input type="text" name="surname" value="<?=$surname;?>" readonly>
		<br><br>
		Student_ID : &nbsp;&nbsp; <input type="text" name="student_ID" value="<?=$student_ID;?>" readonly>
		<br><br>
		E-mail :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" value="<?=$email;?>" readonly>
		<br><br>


		<button class="submit" type="submit" value="Confirm" name="Confirm">Confirm</button>
		
		
		<!-- 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signUp.php">ยกเลิก</a> -->


	</form>
		<br> 
	<a href="index.php"><p>GO TO HOMEPAGE</p></a>
	</div>
	</center>
</body>
</html>
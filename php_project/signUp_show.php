<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up : confirm</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<center>
	<div id="sign_up">
	<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
	?>
	<form action="signUp_db.php" method="POST">
		<h3>SIGN UP : COMFIRM</h3>
		username : <input type="text" name="username" value="<?=$username?>" readonly>
		<br><br>
		password : <input type="text" name="password" value="<?=$password?>" readonly>
		<br><br>
		name : <input type="text" name="name" value="<?=$name?>" readonly>
		<br><br>
		surname : <input type="text" name="surname" value="<?=$surname;?>" readonly>
		<br><br>
		e-mail : <input type="text" name="email" value="<?=$email;?>" readonly>
		<br><br>
		<input type="submit" value="ยืนยันการสมัคร">
		<a href="signUp.php">ยกเลิก</a>
	</form>
		<br><br><br>
	<a href="index.php" class="<?php if($page_name =='index.php') { echo 'menuActive';} ?>">BACK TO HOMEPAGE</a>
	</div>
	</center>
</body>
</html>
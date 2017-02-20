<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<center>
	<div id="sign_up">
	<form action="signUp_show.php" method="POST">
		<h3>SIGN UP</h3>
		username : <input type="text" name="username">
		<br><br>
		password : <input type="text" name="password">
		<br><br>
		name : <input type="text" name="name">
		<br><br>
		surname : <input type="text" name="surname">
		<br><br>
		email : <input type="text" name="email">
		<br><br>
		<input type="submit" value="submit">
	</form>
		<br><br><br>
	<a href="index.php" class="<?php if($page_name =='index.php') { echo 'menuActive';} ?>">BACK TO HOMEPAGE</a>
	</div>
	</center>
</body>
</html>
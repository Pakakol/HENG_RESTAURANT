<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Login</title>
</head>
<body>

<div id="login_box">
		<div id="wraplogo">
			<div id="head-logo">
       		<a href="home.php"><img class="logo" src="image-pic/logo2.png"></a>
       		<br>
       		<p2>SIGN UP</p2>
   		</div></div>

<form action="register_db.php" method="POST" enctype="multipart/form-data">
   		Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name">
		<br>
		Username : &nbsp; <input type="text" name="username">
		<br>
		Password : &nbsp;&nbsp; <input type="password" name="password">
		<br>
		<!-- Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="type"> -->
		<!-- Profile Picture : &nbsp;<input type="file" name="imgFile_f" id="imgFile_f" class="file"> -->

		<input type="submit" class="submit"type="submit" value="Register" name="Sign up">
		 <br><br>
		</form>

		<p1>I have an account <a href="login.php">&nbsp;Login Now</a></p1>


	</div> <!-- END LOGIN BOX -->

</body>
</html>
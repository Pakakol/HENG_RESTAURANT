<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/signup_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Login</title>
</head>
<body>


	
<div id="login_box">
		<div id="wraplogo">
			<div id="head-logo">
       		<a href="home.php"><img class="logo" src="images/logo2.png"></a>
       		<br>
       		<p2>SIGN UP</p2>
   		</div></div>

<form action="signup_db.php" method="POST" enctype="multipart/form-data">
   		Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">
		<br>
		Surname : &nbsp;&nbsp;&nbsp; <input type="text" name="surname">
		<br>
		Username : &nbsp;&nbsp; <input type="text" name="username">
		<br>
		Password : &nbsp;&nbsp; <input type="password" name="password">
		<br>
		Gender : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<select name="gender">
					<option>- Select -</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					</select>
		<br>
		Age : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="age">
		<br>
		Tel : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="tel">
		<br>
		E-mail : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email">
		<br>

		Profile Picture : &nbsp;<input type="file" name="imgFile_f" id="imgFile_f" class="file">

		<br>

		Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<select name="type">
					<option>- Select -</option>
					<option value="designer">Designer</option>
					<option value="customer">Customer</option>
					</select>
	

		<input type="submit" class="submit"type="submit" value="Sign up" name="Sign up">
		 <br><br>
		</form>

		<p1>I have an account <a href="login.php">&nbsp;Login Now</a></p1>


	</div> <!-- END LOGIN BOX -->

</body>
</html>
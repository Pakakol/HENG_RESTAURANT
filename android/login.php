	<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Login</title>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Prompt:400,500,800');
	</style>
</head>
<body>

	<div id="wrapper">
	<center><div id="login_box" style="max-width=960px">

		<div id="head-logo">
       		<a href="home.php"><img class="logo" src="image-pic/logo2.png"></a>
       		<br>
       		<p2>LOG IN</p2>
   		</div>

   	<form action="check_login.php" method="POST">

		<input type="text" name="username" > <br>
		<input type="password" name="password" > 

		<input type="submit" class="submit" value="Log in" name="Log in">

		<br><br>

	</form>

	<?php
				    	
				    ?>

		<p1>Don't have an account? <a href="register.php">&nbsp;Create One</a></p1>


	</div> <!-- END LOGIN BOX --></center>


</div><!-- wrapper -->
</body>
</html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style_register.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>

	<center>
		<div class="container">
		<center>
			<div class="head-logo">
        
        	<img src="images/logo.png">
        	<div class="menu">        
            <center>
            	<ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="product.php">PRODUCT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </center>
        </div>
		</div> 

			<div class="head-dot"></div>

			<br>

			<h3>Register</h3> <br><br>
			
	<form action="register_show.php" method="POST">

		Username : &nbsp; <input type="text" name="username">
		<br><br>
		Password : &nbsp; <input type="text" name="password">
		<br><br>
		Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">
		<br><br>
		Surname : &nbsp;&nbsp; <input type="text" name="surname">
		<br><br>
		Student_ID : &nbsp;&nbsp; <input type="text" name="student_ID">
		<br><br>
		E-mail : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email">
		<br><br>

		
		<button class="submit" type="submit" value="Send" name="send">Send</button>

	</form>

	</center>

</body>
</html>
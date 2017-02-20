<?php
	session_start();
    require './connect_checkStatus.php';//link
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Check Status</title>
	<link rel="stylesheet" type="text/css" href="css/style_checkStatus.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<center>
		<div class="container">
		<center>
			<div class="head-logo">
        
        	<img src="images/logo.png">
        	<br>
        	<div class="menu">        
            <center><ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="product.php">PRODUCT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul></center>
        </div>
		</div> 

			<div class="head-dot"></div>

			<br>

			<h3>Check Status Works</h3>
			<br>

			<p>Input your code in box to search your work</p>
			<br><br><br>

			<form action="connect_checkStatus.php" method="POST">



			Code :&nbsp;&nbsp;<input type="text" name="student_ID" >

			<button class="submit" type="submit" value="check" name="check">Check</button>

		</form>


</body>
</html>
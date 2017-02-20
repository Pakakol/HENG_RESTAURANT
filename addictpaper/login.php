<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>
  
<html>
<head>
	<meta chaset="UTF-8">
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style_login.css">

</head>
<body>

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

			<h3>LOG IN</h3> <br><br>

			

			<form action="check_login.php" method="POST">
					
				Username : &nbsp; <input type="text" name="username"> <br><br>
				Password : &nbsp; <input type="password" name="password">	

				<br><br>

					<button class="submit" type="submit" value="Log in" name="Log in">Log in</button>

				<!-- <button class="login_button">Log in</button> -->
				<br><br><br>

			</form>

			<?php
				    	
				    ?>

			<!-- <a href="#"><p>I forgot a Password</p></a> -->

			<a href="index.php"><p>GO TO HOMEPAGE</p>
			</a>

		</center>





	</div> <!-- End Container -->

</body>
</html>
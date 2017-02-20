<?php
	session_start();
	$page_name = basename($_SERVER['PHP_SELF']); //ชื่อpage
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BAKERY HOUSE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/lightslider.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.lightSlider.js"></script> 
</head>
<body>
	<header>
		<div id="loginAndCart">
			<?php
						if (isset($_SESSION['customer_name'])) {

							echo "Welcome,".' '.$_SESSION['customer_name'].'  '."<a href='more.php'>+</a>".' | '."<a href='logout.php'>logout</a>";

						}else{
					?>
							<a href="logIn.php">Log In</a> | <a href="signUp.php">Sign Up</a> 
				    <?php
				    	}
				    ?>
			<button id="cartHeader"><i class="fa fa-shopping-cart"></i></button>
		</div>
		<a href="index.php"><img src="images/logo.gif"></a>
		<br>
		<nav>	
			<!-- ถ้าชื่อหน้าที่เปิดเว็บไซต์ชื่อตรงเงื่อนไขก็จะให้active  --> 
			<a href="index.php" class="<?php if($page_name =='index.php') { echo 'menuActive';} ?>">HOME</a> 
			<a href="menu.php" class="<?php if($page_name =='menu.php') { echo 'menuActive';} ?>">MENU</a>         
			<a href="#">ABOUT ME</a>      
			<a href="#">CONTACT</a>  
		</nav> 
		
	</header>
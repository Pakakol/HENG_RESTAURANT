<html>
<head>
	<meta charset="utf-8">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="contrainer_login">
		<center>
		<div class="account_customer">
			<a href="index.php"><img src="images/logo.gif"></a>
			<h3>LOG IN</h3>
			<p>Please enter your ID and password to access the website</p>
			<?php
						if (isset($_SESSION['customer_name'])) {
							header('location:index.php');
						}else{
					?>
							<form action="check_login.php" method="POST">
								username : <input type="text" name="username">
								<br>
								<br>
								password : <input type="text" name="password">
								<br>
								<br>
								<input type="submit" value="submit">
								<br>
								<br>
								<br> 
								</form>
				    <?php
				    	}
				    ?>
			<a href="index.php" class="<?php if($page_name =='index.php') { echo 'menuActive';} ?>">BACK TO HOMEPAGE</a>
		</div>
	</center>
	</div>
</body>
</html>
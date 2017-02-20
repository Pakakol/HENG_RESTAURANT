<?php
    session_start();
    $page_name = basename($_SERVER['PHP_SELF']); //ชื่อpage
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Addictpaper</title>
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.lightSlider.js"></script> 
</head>
<body>
    <div class="contain_user">
        <!-- <div class="user"><a href="login.php">login</a> | <a href="register.php">register</a> | <a href="logout.php">log out</a></div>
    </div><!END CoNTAIN_USER --> 

    <div class="user">
<?php
    error_reporting (E_ALL ^ E_NOTICE);

    $username = $_SESSION['username'];
    if (isset($username)) {
                echo $username.'&nbsp;&nbsp;|&nbsp;&nbsp;';
                echo "<a href='logout.php'>logout</a>";
    }else{
?>
    <a href="login.php">Log in</a> |
    <a href="Register.php">Register</a>
<?php

    }
?>
</div> <!-- End user -->
<br>
<br>


    <div class="head-logo">
        <img src="images/logo.png">
        <div class="menu">        
            <center><ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="product.php">PRODUCT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul></center>
        </div>
        <div class="head-dot"></div>
    </div>  
   
	<article id="sliderHome">
		<div class="slider">
            <ul id="slider" class="content-slider">
                <li>
                    <img src="images/s-img2.jpg">
                </li>
                <li>
                    <img src="images/s-img1.jpg">
                </li>
                <li>
                    <img src="images/s-img3.jpg">
                </li>
            </ul>
        </div>
        <script>
                 $(document).ready(function() {
                    $('#slider').lightSlider({
                        adaptiveHeight:true,
                        item:1,
                        slideMargin:0,

                        speed: 600, //ms'
                        auto: true,
                        loop: true,
                        pause: 2000,
                    });
                });
            </script>
    </article>

    <div id="box-1">
        <a href="form.php"><div class="btn">ORDER</div></a>
        <a href="checkStatus.php"><div class="btn">CHECK STATUS</div></a>
    </div>
    <div class="line"></div>
    <div id="icon">
        <ul>
            <li><a href="#"><img src="images/i-1.png"></a></li> <!-- FB ICON -->
            <li><a href="#"><img src="images/i-2.png"></a></li>
            <li><a href="#"><img src="images/i-3.png"></a></li>
        </ul>
    </div>
    </body>
    </html>
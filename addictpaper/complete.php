<?php
    require './connect_form.php';//link
    require './connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>แบบฟอร์มการส่งงาน</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style_form.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/javascript.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
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

<!--insert here-->
    

        <div class="review">
            <center>
        	<h2>Successful!</h2><br>
        	<h3>ชื่อ &nbsp;<?php echo $name; ?></h3>
            <h3>นามสกุล &nbsp;<?php echo $surname."<br>"; ?></h3><br>
            <h3>เลขที่ใบรับงาน &nbsp;<?php echo $student_ID."<br>"; ?></h3><br>
        	<h3>รายละเอียดของงาน &nbsp;<?php echo $type." "."<br>"?> ขนาดกระดาษ <?php echo $papersize." "?> ปริ้นท์<?php echo $color." ";?>เข้าเล่มแบบ<?php echo $types." "."<br>"?></h3>
            
            <br><br>
            <a href="gen_pdf/addictpaper_<?=$student_ID;?>.pdf" target="_blank" class="btn btn-primary btn-lg n-1">ดาวน์โหลดใบรับงาน</a>
        </center>
        	
        </div><!--end row2-->

    </div><!--- END container fluid -->
   	</body>
</html>
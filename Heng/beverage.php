<?php 

	session_start();
	require 'connect.php';

    $meSql = "SELECT * FROM Beverage;";
	$meQuery = mysqli_query($meConnect,$meSql);
 ?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<title>Delivery | Beverage</title>
</head>

<body>

	<div id="head">
		<div id="logo">
			<img src="img/logo.png">
		</div><!-- END LOGO -->

		<div class="menu">

            <center><ul>
                <li><a href="#">&nbsp HOME &nbsp</a></li>
                <li><a href="menu.php"class="active">&nbsp DELIVERY &nbsp</a></li>
                <li><a href="#">&nbsp BOOKING &nbsp</a></li>
                <li><a href="#">&nbsp PROMOTION &nbsp</a></li>
                <li><a href="#">&nbsp CONTACT &nbsp</a></li>

            </ul></center>
        </div>

        <div class="menu-right">
        	<ul>
        		<li> <i class="fa fa-shopping-cart"></i>&nbsp; 0</li> |
        		<li>&nbsp PAKAKOL</li>

        	</ul>

        </div><!-- end menu-right -->

        <div id="profile"><img src="img/pro.png"></div>



	</div> <!-- END HEAD -->

	<div class="head-dot"></div> &nbsp;

	<div class="menu-2">
		<h1>MENU  &nbsp&nbsp&nbsp&nbsp&nbsp 
			<a href="menu.php">&nbsp&nbsp อาหาร &nbsp&nbsp</a> &nbsp&nbsp&nbsp&nbsp
			<a href="beverage.php" class="active-border">&nbsp&nbsp เครื่องดื่ม &nbsp&nbsp</a></h1>
	</div><!-- end menu2 -->

	<div class="timeline">
		<img src="img/time1.png">
	</div><!-- end timeline -->







	<!--Food Line 3 -->
	<div class="wrap-food"></center>

		<?php
        while ($meResult = mysqli_fetch_assoc($meQuery))
            {
                ?>



		<div class="box1">

			<div class="img-food"><img src="<?php  echo $meResult['bvImages']; ?>"></div>
			<div class="detail-food"><?php  echo $meResult['bvName']; ?> <br>
				<p2><?php  echo $meResult['bvPrice']; ?> บาท</p2>
			</div><!-- detail-food -->

			<div class="button-cart">
				<button class="cart"><i class="fa fa-shopping-cart"></i>&nbsp;เพิ่มลงตระกร้า</button>
			</div><!-- end button-cart -->

			

		</div><!-- box1 -->

<?php }
    ?>
		
	</div><!-- end wrap-food --> 
	


	<div class="next-button"><a href="cart.php"><button class="next">Next</button></a></div>
	
	<div class="head-dot"></div> <br>

	<footer><center><img src="img/footer.png"></center></footer>




</body>
</html>

<?php
mysqli_close($meConnect);
?>

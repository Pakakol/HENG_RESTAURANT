<?php
session_start();
require 'connect.php';

$meSql = "SELECT * FROM products ";
$meQuery = mysqli_query($meConnect,$meSql);

$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
    $meQty = 0;
    foreach($_SESSION['qty'] as $meItem){
        $meQty = $meQty + $meItem;
    }
}else{
    $meQty=0;
}
?>


  

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<title>เฮง ยอดผัก | รายการอาหาร</title>
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
        		<li> <a href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;<?php echo $meQty; ?></a></li> |
        		<li>&nbsp PAKAKOL</li>

        	</ul>

        </div><!-- end menu-right -->

        <div id="profile"><img src="img/pro.png"></div>



	</div> <!-- END HEAD -->

	<div class="head-dot"></div> &nbsp;

	<div class="menu-2">
		<h1>MENU  &nbsp&nbsp&nbsp&nbsp&nbsp 
			<a href="menu.php" class="active-border">&nbsp&nbsp อาหาร &nbsp&nbsp</a> &nbsp&nbsp&nbsp&nbsp
			<a href="beverage.php">&nbsp&nbsp เครื่องดื่ม &nbsp&nbsp</a></h1>
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

			<div class="img-food"><img src="<?php  echo $meResult['product_img_name']; ?>"></div>
			<div class="detail-food"><?php  echo $meResult['product_name']; ?> <br>
				<p2><?php  echo $meResult['product_price']; ?></p2>
			</div><!-- detail-food -->


			

			<div class="button-cart">

		<!-- <form action="cart_add.php" method="POST"> -->

			<input type="hidden" ><br>
   
			<a href="updatecart.php?itemId=<?php echo $meResult['id']; ?>" role="button" ><button class="cart"><i class="fa fa-shopping-cart"></i>&nbsp;เพิ่มลงตระกร้า</button></a>

		<!-- </form> -->

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

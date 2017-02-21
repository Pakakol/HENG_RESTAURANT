<?php
session_start();
require 'connect.php';

$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
$_SESSION['formid'] = sha1('' . microtime());
if (isset($_SESSION['qty'])) {
	$meQty = 0;
	foreach ($_SESSION['qty'] as $meItem) {
		$meQty = $meQty + $meItem;
	}
} else {
	$meQty = 0;
}
if (isset($_SESSION['cart']) and $itemCount > 0) {
	$itemIds = "";
	foreach ($_SESSION['cart'] as $itemId) {
		$itemIds = $itemIds . $itemId . ",";
	}
	$inputItems = rtrim($itemIds, ",");
	$meSql = "SELECT * FROM products WHERE id in ({$inputItems})";
	$meQuery = mysqli_query($meConnect,$meSql);
	$meCount = mysqli_num_rows($meQuery);
} else {
	$meCount = 0;
}
?>

<html>
<head>
	<title>เฮง ยอดผัก</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
        		<li> <a href="cart.php"><i class="fa fa-shopping-cart"></i><?php echo $meQty; ?></a></li> |
        		<li>&nbsp PAKAKOL</li>
        	</ul>

        </div><!-- end menu-right -->

        <div id="profile"><img src="img/pro.png"></div>

	</div> <!-- END HEAD -->

	<div class="head-dot"></div> &nbsp;

	<div class="menu-2">
		<h1>SUCCESSFUL  
			
	</div><!-- end menu2 -->

	<div class="timeline">
		<img src="img/time3.png">
	</div><!-- end timeline -->
	<br>


	<div class="wrap-cart">
		<?php
                        $total_price = 0;
                        $num = 0;
                        while ($meResult = mysqli_fetch_assoc($meQuery))
                            {
                            $key = array_search($meResult['id'], $_SESSION['cart']);
                            $total_price = $total_price + ($meResult['product_price'] * $_SESSION['qty'][$key]);
                            ?>
		<div class="box_success">
			
				<img id="icon" src="img/checked.png">

			<div class="details_menu">
				

						<h3>รวม : <?php echo number_format($total_price, 2); ?> บาท</h3>
			
						รายการอาหารที่สั่งเรียบร้อยแล้ว <br>
						ขอบคุณที่ใช้บริการ <br>

			</div><!-- details_menu -->
		</div><!-- box_success -->

                <?php
                }
            ?>





		<div class="box_success">
			<form action="updateorder.php" method="post" name="formupdate" role="form" id="formupdate" onsubmit="JavaScript:return updateSubmit();">
			
				<h2>ส่งอาหารที่...</h2> <br>
			<div class="address">
				ชื่อ-นามสกุล*&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" class="ip-ad" id="order_fullname" name="order_fullname"><br>
				ที่อยู่*&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea id="order_address" name="order_address" ></textarea><br>
				เบอร์โทร*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="text" class="ip-ad" id="order_phone" name="order_phone"><br>

				
				<button id="confirm" type="submit">Confirm</button>
	</div><!-- address -->

			</div><!-- details_menu --></form>
		</div><!-- box_success -->



	</div><!-- wrap-cart -->
	<div id="empty"></div>
	

<div class="head-dot"></div> 

	<footer><center><img src="img/footer.png"></center></footer>




</body>
</html>
<?php
mysqli_close($meConnect);
?>
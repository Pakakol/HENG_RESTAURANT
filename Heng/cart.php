<?php
session_start();
require 'connect.php';

$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if (isset($_SESSION['qty']))
{
    $meQty = 0;
    foreach ($_SESSION['qty'] as $meItem)
    {
        $meQty = $meQty + $meItem;
    }
} else
{
    $meQty = 0;
}
if (isset($_SESSION['cart']) and $itemCount > 0)
{
    $itemIds = "";
    foreach ($_SESSION['cart'] as $itemId)
    {
        $itemIds = $itemIds . $itemId . ",";
    }
    $inputItems = rtrim($itemIds, ",");
    $meSql = "SELECT * FROM products WHERE id in ({$inputItems})";
    $meQuery = mysqli_query($meConnect,$meSql);
    $meCount = mysqli_num_rows($meQuery);
} else
{

    $meCount = 0;
}

?>


<html>
<head>
	<title>Delivery | Cart</title>
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
        		<li> <a href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;<?php echo $meQty; ?></a></li> |
        		<li>&nbsp PAKAKOL</li>
        	</ul>

        </div><!-- end menu-right -->

        <div id="profile"><img src="img/pro.png"></div>



	</div> <!-- END HEAD -->

	<div class="head-dot"></div> &nbsp;


	


	<div class="menu-2">
		<h1>MY CART  
			
	</div><!-- end menu2 -->

	<div class="timeline">
		<img src="img/time2.png">
	</div><!-- end timeline -->
	<br>


	<div class="wrap-cart">
		<?php
           
            if ($meCount == 0)
            {
                echo "<div class=\"cart-pay\">ไม่มีสินค้าอยู่ในตะกร้า</div>";
            } else
            {
                ?>

                	<form action="updatecart.php" method="post" name="fromupdate">

		<?php
                            $total_price = 0;
                            $num = 0;
                            while ($meResult = mysqli_fetch_assoc($meQuery))
                            {
                                $key = array_search($meResult['id'], $_SESSION['cart']);
                                $total_price = $total_price + ($meResult['product_price'] * $_SESSION['qty'][$key]);
                                ?>

		<div class="box-2">
				<div class="cart-img"><img src="<?php echo $meResult['product_img_name']; ?>"></div>
				<div class="details-cart">
					<?php echo $meResult['product_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p2><?php echo number_format($meResult['product_price'],2); ?></p2>

				</div><!-- details-cart -->

				<div class="add-bar">จำนวน&nbsp;&nbsp; <input type="text" name="qty[<?php echo $num; ?>]" value="<?php echo $_SESSION['qty'][$key]; ?>" class="form-control" style="width: 60px;text-align: center;">
                                        <input type="hidden" name="arr_key_<?php echo $num; ?>" value="<?php echo $key; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<a href="removecart.php?itemId=<?php echo $meResult['id']; ?>" role="button" class="cart"><i class="fa fa-trash"></i>&nbsp;&nbsp;DELETE</a></div><!-- add-bar -->
		
	



		</div><!-- box-2 -->
			<?php
                                $num++;
                            }
                            ?>


		<div class="box-total">ราคารวม :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format($total_price,2); ?> </div>


	</div><!-- wrap-cart -->
	</form>
 <?php
            }
            ?>



	


	<div class="next-button"><a href="success.php"><button class="next">Next</button></a></div>
	

	




	<div class="head-dot"></div> 

	<footer><center><img src="img/footer.png"></center></footer>



</body>
</html>
<?php
mysqli_close($meConnect);
?>
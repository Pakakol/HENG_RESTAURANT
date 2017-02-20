<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);

    require './connect.php';
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
        		<li> <i class="fa fa-shopping-cart"></i></li> |
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
		

          $sql="SELECT * FROM Order;";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            
         ?> 



		<div class="box-2">
				<div class="cart-img"><img src="<?php  echo $rows['pics']; ?>"></div>
				<div class="details-cart">
					เส้นใหญ่ราดหน้า &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p2>40 บาท</p2>

				</div><!-- details-cart -->

				<div class="add-bar">จำนวน&nbsp;&nbsp; <input type="text" id="numfood">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button class="cart"><i class="fa fa-trash"></i>&nbsp;&nbsp;DELETE</button> </div><!-- add-bar -->
		</div><!-- box-2 -->
<?php }
    ?>

	</div><!-- wrap-cart -->

	
	

	<div class="wrap-cart">

		<div class="box-total">
				ราคารวม  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 100 บาท
		</div><!-- box-2 -->

		
	</div><!-- wrap-cart -->
	

	<div class="head-dot"></div> 

	<div class="wrap-cart">
	
		<h2>ส่งอาหารที่...</h2> <br>
			<div class="address">

				<form action="order_db.php" method="POST">

				ชื่อ-นามสกุล*&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" class="ip-ad" name="name_customer"><br>
				ที่อยู่*&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea name="address"></textarea><br>
				เบอร์โทร*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="text" class="ip-ad" name="tel"><br>

				<button id="back" >Back</button>
				<a href="success.php"><button id="confirm">Confirm</button></a>
				<!-- <button id="confirm" type="submit" value="confirm" name="confirm">Confirm</button> -->

				  </form>

	</div><!-- address -->
	</div><!-- wrap-cart -->


	<div class="head-dot"></div> 

	<footer><center><img src="img/footer.png"></center></footer>



</body>
</html>
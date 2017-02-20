<?php
    session_start();
    // $page_name = basename($_SERVER['PHP_SELF']);

    //unset($_SESSION["number_product"]);
	
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
        		<li> <a href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;<?php if(isset($_SESSION['number_product'])){ echo $_SESSION['number_product'];}?></a></li> |
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
		require './connect.php';


          $sql="SELECT * FROM Menu;";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            
         ?> 

		<div class="box1">

			<div class="img-food"><img src="<?php  echo $rows['images']; ?>"></div>
			<div class="detail-food"><?php  echo $rows['Name']; ?> <br>
				<p2><?php  echo $rows['Price']; ?></p2>
			</div><!-- detail-food -->


			

			<div class="button-cart">

		<form action="cart_add.php" method="POST">

			<input type="hidden" name="product_fur" value="<?php echo $rows['Menu_id'];?>"><br>
   
			<a href="menu.php?Menu_id=<?php echo $rows['Menu_id']; ?>"><button class="cart"><i class="fa fa-shopping-cart"></i>&nbsp;เพิ่มลงตระกร้า</button></a>

		</form>

			</div><!-- end button-cart -->

		</div><!-- box1 -->

<?php }
    ?>


	</div><!-- end wrap-food --> 
	


	<div class="next-button"><a href="cart.php"><button class="next">Next</button></a></div>
	
	<div class="head-dot"></div> <br>

	<footer><center><img src="img/footer.png"></center></footer>


<?php 
			var_dump(empty($_GET));
			if (!(isset($SESSION["manu"])) && empty($_GET)) {
				$SESSION["manu"]= array();
				var_dump($SESSION["manu"]);
				echo "fail";
			} else if(!(isset($SESSION["manu"])) && !(empty($_GET))) {
				$SESSION["manu"] = $_GET["Menu_id"];
				var_dump($SESSION["manu"]); echo "true";
			} else {
				var_dump($SESSION["menu"]);
				$SESSION["manu"]= array_push($SESSION["manu"], $_GET["Menu_id"]);
				echo "test";
				
			}

				
				  // unset($_SESSION["menu"]);
	?>

</body>
</html>


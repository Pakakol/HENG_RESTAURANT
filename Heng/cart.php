<?php
    session_start();
    // $page_name = basename($_SERVER['PHP_SELF']);
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
        		<li> <a href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;<?php if(isset($_SESSION['number_product'])){ echo $_SESSION['number_product'];}?></a></li> |
        		<li>&nbsp PAKAKOL</li>
        	</ul>

        </div><!-- end menu-right -->

        <div id="profile"><img src="img/pro.png"></div>



	</div> <!-- END HEAD -->

	<div class="head-dot"></div> &nbsp;


	<?php 
	require'connect.php';
  $objConnect -> query("set names utf8");
  ?>


	<div class="menu-2">
		<h1>MY CART  
			
	</div><!-- end menu2 -->

	<div class="timeline">
		<img src="img/time2.png">
	</div><!-- end timeline -->
	<br>


	<div class="wrap-cart">

		
		<?php 
     if ($_SESSION['number_product']!=0) {
       $i=1;
     
     foreach ($_SESSION['cart'] as $key => $menu) {
       foreach ($menu as $key => $Menu_id) {
        


       $sql ="SELECT * FROM Menu WHERE Menu_id = '$Menu_id'";
       $query = mysqli_query($objConnect,$sql);
       
          while ($rows=mysqli_fetch_array($query)) {

            ?>

		

     <form action="success.php" method="POST">

		<div class="box-2">
				<div class="cart-img"><img src="<?php  echo $rows['images']; ?>"></div>
				<div class="details-cart">
					<?php  echo $rows['Name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p2><?php  echo $rows['Price']; ?></p2>

				</div><!-- details-cart -->

				<div class="add-bar">จำนวน&nbsp;&nbsp; <input type="text" id="numfood" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button class="cart"><i class="fa fa-trash"></i>&nbsp;&nbsp;DELETE</button> </div><!-- add-bar -->
		
					<script type="text/javascript">
          
        
     function resultPrice<?php echo $i; ?>() {
      var x = document.getElementById('resultPrice').value;
      var totalPrice = document.getElementById('totalPrice-<?php echo $i ?>').value;
      var total = +x + +totalPrice;

      document.getElementById('resultPrice-text').innerHTML = total;
      document.getElementById('resultPrice').value = total;

     }
      
     </script>
     



		</div><!-- box-2 -->

		<?php $i++; ?>
            
            <?php 
            }//end while


          }//end foreach
       }//end foreach
     }//end if
      ?>
	


	</div><!-- wrap-cart -->

	


	<div class="next-button"><a href="success.php"><button class="next">Next</button></a></div>
	

	

</form>


	<div class="head-dot"></div> 

	<footer><center><img src="img/footer.png"></center></footer>



</body>
</html>
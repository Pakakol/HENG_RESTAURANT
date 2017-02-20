<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>

<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/style-img.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <!-- อันนี้ด้วย -->
  <script src="https://code.jquery.com/jquery-3.0.0.js"  integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="   crossorigin="anonymous"></script>
  <!-- ถึงอันนี้ -->
	<title>iLLUSMINATED</title>
</head>
<body>

	<div class="head-logo">

    <!-- อันนี้คือเมนนูแฮมเบอร์เกอร์นะจ้ะ ล่างนี้ลงไปถึง hamburger -->
        <center>
          <div class="hamburger">
          <div class="size">&#9776;</div>
          <nav>
            <ul>
              <li><a href="home.php" class="active">&nbsp HOME &nbsp</a></li>
              <li><a href="categories.php">&nbsp CATEGORIES &nbsp</a></li>
              <li><a href="news.php">&nbsp NEWS &nbsp</a></li>
              <li><a href="contact.php">&nbsp CONTACT &nbsp</a></li>
              <li><a href="uploads.php">&nbsp UPLOADS &nbsp</a></li>
              <?php

              if(isset($_SESSION['memberName'])) {

                 if ($_SESSION['memberType']=='admin') { ?>
              <li><a href="adminpage.php?memberId='.$_SESSION['memberId'].'"><?= $_SESSION['memberUsername'] ?></a>&nbsp
                <li><a href="logout.php">Log out</a></li>
            <?php  } else{ ?>

              <li><a href="profile.php?memberId='.$_SESSION['memberId'].'"><?=$_SESSION['memberUsername']?>'</a></li>
              <li><a href="logout.php">Log out</a></li>
              <?php   }
              }else{ ?>
              <li><a href="login.php">Log in</a>
              <li><a href="signup.php">Sign Up</a></li>
            <?php   }
             ?>
            </ul>
          </nav>
        </div>
        </center>
        <!-- hamburger -->
        <!-- สุดแค่นี้ -->

<a href="index.php"> <img class="logo" src="images/logo2.png"></a>

<div id="search-box">

  <form action="search.php" method="POST">

  <input class="search" type="text" name="search"> &nbsp;
  <input type="submit" name="submit" id="search-btn">
  <i class="fa fa-search"></i>

  </form>

</div><!-- search-box -->

  </div> <!-- head logo -->


<div class="head-dot"></div>



	<div id="menucontrol">
    <div id="menucontrol-left">


        <div class="menu">

            <center><ul>
                <li><a href="home.php" class="active">&nbsp HOME &nbsp</a></li>
                <li><a href="categories.php">&nbsp CATEGORIES &nbsp</a></li>
                <li><a href="news.php">&nbsp NEWS &nbsp</a></li>
                <li><a href="contact.php">&nbsp CONTACT &nbsp</a></li>
                <li><a href="uploads.php">&nbsp UPLOADS &nbsp</a></li>
            </ul></center>
        </div>
        

    </div><!-- menucontrol-left -->


        <div id="menucontrol-right">

       <?php

       if(isset($_SESSION['memberName'])) {

          if ($_SESSION['memberType']=='admin') {
          echo '<a href="adminpage.php?memberId='.$_SESSION['memberId'].'">'.$_SESSION['memberUsername'].'</a>&nbsp |&nbsp <a href="logout.php">Log out</a>';
          }else{

          echo '<a href="profile.php?memberId='.$_SESSION['memberId'].'">'.$_SESSION['memberUsername'].'</a>&nbsp |&nbsp <a href="logout.php">Log out</a>';
          }
        }else{
          echo '<a href="login.php">Log in</a>&nbsp |&nbsp <a href="signup.php">Sign Up</a>';
        }
      ?>


            <!-- <a href="signup.php">Sign Up</a> -->

    </div><!-- menucontrol-right -->


  </div><!-- menucontrol -->


  <!-- END HEAD -->


    <div class="head-dot"></div>

<!-- Slide show --> <center>
    <div class="w3-content w3-section" style="max-width:960px">
  <img class="mySlides" src="images/slide1.jpg" style="width:100%">
  <img class="mySlides" src="images/slide2.jpg" style="width:100%">
  <img class="mySlides" src="images/slide3.jpg" style="width:100%">
  <img class="mySlides" src="images/slide4.jpg" style="width:100%">
  <img class="mySlides" src="images/slide7.jpg" style="width:100%">
  <img class="mySlides" src="images/slide6.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script> <!-- End Slide Show --> </center>


  <div class="head-dot"></div> <br>



<div id="wrapping-menu">

  <div id="wrapmenu-2">

    <a href="categories_graphic.php"><div class="menubox">

        <img class="menubox-img" src="images/icon1.png">

    </div><!-- mebubox --></a>

    <a href="categories.php"><div class="menubox">

        <img class="menubox-img" src="images/icon-2.png">

    </div><!-- mebubox --></a>

    <a href="categories_typo.php"><div class="menubox">

        <img class="menubox-img" src="images/icon-3.png">

    </div><!-- mebubox --></a>

</div><!-- wrapmenu-2 -->

</div><!-- wrapping-menu -->


<div class="head-dot"></div> <br>

<div id="title-con"><h3>Recent News</h3></div><!-- title-con -->

<div class="head-dot"></div> <br>


<!-- ///////  Content  /////// -->

<div id="wrap-content">




    <div id="wrap-content-2"> <!-- content left -->
      <?php

          require './connect.php';

          $sql="SELECT * FROM News WHERE newsStatus='1';";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            ?>

      <div class="content-img">
        <a href="news_details.php?newsId=<?php echo $rows['newsId']?>"><div class="img_news" style="background-image:url('<?php echo $rows['newsPicture']; ?>')">
      </div></a>
       </div><!-- content-img -->

       <div class="content-right">

          <h2><?php echo $rows['newsTitle']; ?></h2>

          <p><?php echo $rows['newsContent']; ?>
            <br><br> <a class="credit-con" href="<?php echo $rows['newsCredit']; ?>"></a> </p> <br>

         <a href="news_details.php?newsId=<?php echo $rows['newsId']?>"><div class="button-content"> view more </div></a>

       </div><!-- content-right -->

       <?php } ?>



    </div><!-- wrap-content-2 -->

</div><!-- wrap-content -->



<div class="head-dot"></div>


<!-- <footer> Copyright 2016 for education only &nbsp; | &nbsp; create by Pakakol S.</footer> -->



</body>
</html>
<!-- อันนี้ด้วย -->
<script type="text/javascript">
  $(document).ready(function(ev){
    $('.hamburger').click( function() { hamburger_click( $(this) ); } );
  });

  function hamburger_click() {
    var nav = $('nav');
    var wNav = $(nav).outerWidth();
  	console.log(wNav);

    if ( nav.hasClass("active") ) {
      $(this).removeClass("active");
      nav.removeClass("active");
      nav.animate({
        right: '-' + wNav + 'px'
      }, 300, function() {} );
    } else {
      $(this).addClass("active");
      nav.addClass("active");
      nav.animate({
        right: '0'
      }, 300, function() {} );
    }

  };

</script>
<!-- ถึงแค่นี้ -->

<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
?>


<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/news_upload_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.0.0.js"  integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="   crossorigin="anonymous"></script>
  
	<title>News Uploads</title>
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
       
<a href="home.php"> <img class="logo" src="images/logo2.png"></a>

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
                <li><a href="home.php">&nbsp HOME &nbsp</a></li>
                <li><a href="categories.php">&nbsp CATEGORIES &nbsp</a></li>
                <li><a href="news.php">&nbsp NEWS &nbsp</a></li>
                <li><a href="contact.php">&nbsp CONTACT &nbsp</a></li>
                <li><a href="uploads.php" class="active">&nbsp UPLOADS &nbsp</a></li>
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

    </div><!-- menucontrol-right -->

    
  </div><!-- menucontrol -->



        <div class="head-dot"></div>

        <center>
        <br>
        <div class="title"><p4>News Uploads</p4></div>
        <br>



        <div class="boxup">

    <form action="news_db.php" method="POST" enctype="multipart/form-data">


        	News Title : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="title">
		<br>

        Name Designer : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="designer">
        <br>

		Content : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="content" ></textarea>
		<br>
		Credit : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="credit">
		<br>

        Picture News : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="imgFile_f" id="imgFile_f" class="file">
  

		



		<button class="submit" type="submit" value="Log in" name="Log in">Uploads News
		</button> <br><br>

    </form>


		<p1><a href="adminpage.php">Cancle</a></p1>

        </div> <!-- END BOX UP -->
        </center>


</body>
</html>

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
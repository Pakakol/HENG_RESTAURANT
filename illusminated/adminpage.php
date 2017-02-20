<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
    if ($_SESSION['memberType']!='admin') {
      header("location:admin_error.php");
    }
  ?>

<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/style-img.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<title>Admin Page</title>
</head>
<body>

	<div class="head-logo">
       
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

    <div id="wrapping-menu"> 

  <div id="wrapmenu-2">
    
    <a href="news_upload.php"><div class="menubox">


        <img class="menubox-img" src="images/news-up.png"> 

    </div><!-- mebubox --></a>

    <a href="manage_user.php"><div class="menubox">

    	

        <img class="menubox-img" src="images/user-icon.png"> 

    </div><!-- mebubox --></a>

    <a href="manage_news.php"><div class="menubox">

    	
        <img class="menubox-img" src="images/mn-news.png"> 

    </div><!-- mebubox --></a>

</div><!-- wrapmenu-2 -->

</div><!-- wrapping-menu -->


<div class="head-dot"></div> <br>
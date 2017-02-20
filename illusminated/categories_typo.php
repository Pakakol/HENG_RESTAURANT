<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>

<html>
<head>
  <title>Categories</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/categories.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.0.0.js"  integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="   crossorigin="anonymous"></script>
  
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
                <li><a href="categories.php" class="active">&nbsp CATEGORIES &nbsp</a></li>
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

    </div><!-- menucontrol-right -->

  </div><!-- menucontrol -->
  <!-- END HEAD -->


    <div class="head-dot"></div>

    <div class="wrap-submenu">
      <center> 
              <a href="categories_graphic.php" >Graphics</a> &nbsp;&nbsp;&nbsp;&nbsp; 

              <a href="categories.php">Illustration</a> &nbsp;&nbsp;&nbsp;&nbsp; 

              <a href="categories_typo.php" class="activesub">Typography</a>
            
      </center> 
     </div><!-- END wrap-submenu -->

  <div class="wrap-submenu">
      <header>
        <?php

          require './connect.php'; 

          $sql="SELECT * FROM Uploads WHERE typeWork='typography';";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            ?>
            
      <div class="pic_maxsize"><a href="work_details.php?uploadsId=<?php echo $rows['uploadsId']?>"><img src="<?php  echo $rows['pictureWork']; ?>" alt></a></div>

      <?php } ?>
      
  
    </header>
    </div><!-- END wrap-submenu -->
   


<div class="head-dot"></div>
    

    




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
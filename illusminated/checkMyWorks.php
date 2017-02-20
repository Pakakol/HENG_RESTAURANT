<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
    require './connect.php';
    $memberId=$_SESSION['memberId'];

    
  ?>

<html>
<head>
	<meta charset="utf-8">
	<title>My Works</title>
	<link rel="stylesheet" type="text/css" href="css/checkworks_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/style-img.css">
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
                <li><a href="categories.php">&nbsp CATEGORIES &nbsp</a></li>
                <li><a href="news.php">&nbsp NEWS &nbsp</a></li>
                <li><a href="contact.php">&nbsp CONTACT &nbsp</a></li>
                <li><a href="uploads.php">&nbsp UPLOADS &nbsp</a></li>
            </ul></center>
        </div>
        
    </div><!-- menucontrol-left -->

        <div id="menucontrol-right">

          <?php 

        $sql3="SELECT * FROM Contact_work WHERE memberId='$memberId';";
          $query3 = mysqli_query($objConnect,$sql3);

          $_SESSION['numberWork'] = mysqli_num_rows($query3); //นับจำนวนงานว่าคนนี้มีคนส่งงานมากี่งาน
          echo $_SESSION['numberWork'];

       ?>

          <a href="checkMyWorks.php"><i class="fa fa-table"></i></a> &nbsp;&nbsp;

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

    <div class="title"> Check Works </div>

    <div class="wrap-content">

    	<?php 

    	$memberId=$_SESSION['memberId'];

    		$sql2="SELECT * FROM Contact_work WHERE memberId='$memberId'ORDER BY contactWorkId DESC;";
          $query2 = mysqli_query($objConnect,$sql2);



          while ($rows2=mysqli_fetch_array($query2)) {


    	 ?>

  

    	 <div class="wrap-content"> 

        <div class="box-1">

          <form action="send_mail.php" method="POST">
            <input type="hidden" name="contactWorkType" value="<?php echo $rows2['contactWorkType']; ?>">
            <input type="hidden" name="contactName" value="<?php echo $rows2['contactName']; ?>">
            <input type="hidden" name="contactSurname" value="<?php echo $rows2['contactSurname']; ?>">
            <input type="hidden" name="contactTel" value="<?php echo $rows2['contactTel']; ?>">
            <input type="hidden" name="contactEmail" value="<?php echo $rows2['contactEmail']; ?>">
            <input type="hidden" name="contactDetails" value="<?php echo $rows2['contactDetails']; ?>">

          <h2><?php echo $rows2['contactWorkType']; ?></h2>
          <?php echo $rows2['contactOther']; ?> <br>
          Name : <?php echo $rows2['contactName']; ?> <br>
          Surname : <?php echo $rows2['contactSurname']; ?> <br>
          Tel : <?php echo $rows2['contactTel']; ?> <br>
          E-mail : <?php echo $rows2['contactEmail']; ?> <br>
          Details : <?php echo $rows2['contactDetails']; ?> <br> <br>

          <input type="radio" name="approve" value="1"> Approve
          <input type="radio" name="approve" value="0"> Not Approve 
          &nbsp;&nbsp;
          
          <button class="approve" onrealese="submit" >Send Mail</button>
          <!-- <button class="not-approve" onrealese="submit">Not Approve</button> -->


        </div>

        </form>

       </div><!-- wrapper -->

    	 <?php  //end if

        }//end while ?>



    </div><!-- wrap-content -->




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
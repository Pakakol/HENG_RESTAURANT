<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);

    require './connect.php';

    $memberId=$_GET['memberId'];

  ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>PROFILE</title>
	<link rel="stylesheet" type="text/css" href="css/profile_style.css">
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

    <?php

           

          

          $sql="SELECT * FROM Member WHERE memberId='$memberId';";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            ?>

        

        <div id="profile_pic">

        	<img src="<?php  echo $rows['memberProfilePicture']; ?>" class="proPicture">

        </div>

        <div id="profile_box">
        	<p2><?php  echo $rows['memberUsername']; ?></p2> <br><br>

        	<p3>
        	Name - Surname : <?php  echo $rows['memberName']; ?> <?php  echo $rows['memberSurname']; ?>  <br>
			Age :<?php  echo $rows['memberAge']; ?><br>			
			Gender : <?php  echo $rows['memberGender']; ?> <br>
			Tel : <?php  echo $rows['memberTel']; ?> <br>
			E-mail : <?php  echo $rows['memberEmail']; ?> 
			</p3>
			<br> 

			<a href="contact_work.php?memberId=<?php echo $rows['memberId']; ?>"><button class="submit" type="submit" value="Log in" name="Log in">Contact Work
		</button></a> <br><br>

        </div>

		<?php } //end while ?>

		<div class="head-dot"></div><br>

		<center>

			<div id="box-work">

				<p4>WORKS</p4> <br>


		<?php
	$sql2="SELECT * FROM Uploads WHERE memberId='$memberId';";
          $query2 = mysqli_query($objConnect,$sql2);

          $i=1;

          while ($rows2=mysqli_fetch_array($query2)) {
            ?>
            <?php  if($i==1||$i%5==0){ 
			echo '<div class="hover11 column">';
			  } ?>
			<?php //echo $i; ?>


			<div>
			<figure><a href="work_details.php?uploadsId=<?php echo $rows2['uploadsId']?>"><img src="<?php  echo $rows2['pictureWork']; ?>" /></a></figure>
			<span><?php  echo $rows2['typeWork']; ?></span>
			</div>
			<?php  if($i%4==0){ 
				echo '</div>';
			 } ?>
		<?php $i++; ?>
		<?php } ?>
		
		</div>

			
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
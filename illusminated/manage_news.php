<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);

    require './connect.php';

  ?>

<html>
<head>
  <meta charset="utf-8">
  <title>Manage News</title>
  <link rel="stylesheet" type="text/css" href="css/manage_news_style.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

  <a href="adminpage.php"><div class="title"> Manage News </div></a>

    <div class="wrap-content">

      <?php 


        $sql="SELECT * FROM News ORDER BY newsId DESC;";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            ?>

       <div class="wrap-content"> 

        <div class="box-1">

          <h2><?php echo $rows['newsTitle']; ?></h2>
          <div class="img_news" style="background-image:url('<?php echo $rows['newsPicture']; ?>')">
      </div> <br>
          Designer : <?php echo $rows['newsDesigner']; ?> <br>
          Content : <?php echo $rows['newsContent']; ?> <br>
          Credit : <?php echo $rows['newsCredit']; ?> <br>

          
          
          <button class="edit" onrealese="submit" >Edit</button>
          <button class="delete" onrealese="submit">Delete</button>


        </div>

        </form>

       </div><!-- wrapper -->

       <?php  //end if

        }//end while ?>



    </div><!-- wrap-content -->




</body>
</html>
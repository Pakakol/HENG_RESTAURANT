<?php
require'./connect.php';
session_start();
$sql ="SELECT * FROM Paperwork";

    $query = mysqli_query($objConnect,$sql);

    $rows = mysqli_fetch_array($query);



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Addictpaper</title>
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="style_adminindex.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
</head>
<body>
    <div class="contain_user">
        <!-- <div class="user"><a href="login.php">login</a> | <a href="register.php">register</a>| <a href="logout.php">log out</a></div> -->

    </div><!-- END CoNTAIN_USER -->

    <div class="user">
<?php
$username = $_SESSION['username'];
    if (isset($username)) {
                echo $username .'&nbsp;&nbsp;|&nbsp;&nbsp;';
                echo "<a href='logout.php'>logout</a>";
    }else{
?>
    <a href="login.php">Log in</a> |
    <a href="Register.php">Register</a>
<?php

    }
?>
</div>
<br>
<br>

    <div class="head-logo">
        <img src="images/logo.png">
        <div class="menu">        
            <center><ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="product.php">PRODUCT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul></center>
        </div>
        <div class="head-dot"></div>
    </div>   
    <center>
    <TABLE class="table-add">
            <CAPTION> <h3> Customer Orders</h3><br> </CAPTION>
            <TR>
                     <TH> Works_ID </TH>
                     <TH> Name </TH>
                     <TH> Surname </TH>
                     <TH> Student_ID </TH>
                     <TH> Type </TH>
                     <TH> Upfile </TH>
            </TR> 
            <?php while($rows = mysqli_fetch_array($query)){
                ?>
            <TR>
                     <TD> <?php echo $rows['Paperwork_ID'];?> </TD>
                     <TD> <?php echo $rows['name'];?> </TD>
                     <TD> <?php echo $rows['surname'];?> </TD>
                     <TD> <?php echo $rows['student_ID'];?> </TD>
                     <TD> <?php echo $rows['type'];?> </TD>
                     <TD> <?php echo $rows['upfile'];?> </TD>
                
             </TR>
             <?php
                }
                 ?>
             
</TABLE>   
</center>









    <div id="box-1">
        <a href="form.php"><div class="btn">ORDER</div></a>
        <a href="checkStatus.php"><div class="btn">CHECK STATUS</div></a>
    </div>
    <div class="line"></div>
    <div id="icon">
        <ul>
            <li><a href="#"><img src="images/i-1.png"></a></li> <!-- FB ICON -->
            <li><a href="#"><img src="images/i-2.png"></a></li>
            <li><a href="#"><img src="images/i-3.png"></a></li>
        </ul>
    </div>
    </body>
    </html>
<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);

    require './connect.php';

  ?>

<html>
<head>
   <meta charset="utf-8">
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="css/manage_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>


   

	<div class="table-users">
   <div class="header"><a href="adminpage.php">ADMIN PAGE</a></div>

   <?php


          $sql="SELECT * FROM Member;";
          $query = mysqli_query($objConnect,$sql);

          while ($rows=mysqli_fetch_array($query)) {
            ?>

   
   <table cellspacing="0">


      <tr>
         <th width="120"></th>
         <th width="100">ID</th>
         <th width="500">Name-Surname</th>
         <th width="200">Username</th>
         <th width="200">Gender</th>
         <th width="200">Age</th>
         <th width="200">Tel</th>
         <th width="200">Email</th>
         <th width="200">Type</th>
         <th width="200"></th>
      </tr>

      

      <tr>
         <td><img src="<?php echo $rows['memberProfilePicture']; ?>" /></td>
         <td><?php echo $rows['memberId']; ?></td>
         <td><?php echo $rows['memberName'].$rows['memberSurname']; ?></td>
         <td><?php echo $rows['memberUsername']; ?></td>
         <td><?php echo $rows['memberGender']; ?></td>
         <td><?php echo $rows['memberAge']; ?></td>
         <td><?php echo $rows['memberTel']; ?></td>
         <td><?php echo $rows['memberEmail']; ?></td>
         <td><?php echo $rows['memberType']; ?></td>
         <td><button>Delete</button></td>
      </tr>
   <?php } ?>
   </table>

  

</div>

</body>
</html>
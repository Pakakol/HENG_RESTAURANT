<!-- <html> -->

<?php

   require './connect.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      //username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM member WHERE username_mb = '$username' and password_mb = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $type_mb = $row['type_mb'];
      //echo ($type_mb);
      //$type_mb = mysqli_num_rows($result);
		
      if($type_mb == 'admin') { 
         //session_register("username");
         $username_mb = $row['username_mb'];
         header("location: pageupload3.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
  }

	// require'./connect.php';
	// session_start();

	// mysqli_real_escape_string($conn, $_POST['username']);
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	//$name = $_POST['name'];



	// $sql ="SELECT * FROM member WHERE username_mb ='{$username}' AND password_mb ='{$password}' ";
	// $query = mysqli_query($conn,$sql);

	// echo ($query);

	// $rows = mysqli_fetch_array($query);
	// $type_mb = $rows['type_mb'];
	// echo ($type_mb);
	// $username_mb = $rows['username_mb'];

	// if (!$rows == '0') {
	// 	if ($type_mb == '0') {
			?>
		<!-- <center>
		<div class="check-login">
		<a href="home.php"><img src="images/logo2.png"></a> <br>
		<h3>The username or password is incorrect !</h3>
		<p>Please Log in again !!!</p> <br> -->
		<!-- <a href='logIn.php'>LOG IN</a> -->
		<!-- <div class="button wobble-horizontal"><a href='login.php'><button class="button-account">Back to log in again !</button></a></div>
		</div>
		</center>
 -->
	<?php
			
	// 	}
	// }else{
	// 	//header('Location: http:./pageupload3.php');

	// 	$_SESSION['username_mb'] = $rows['username_mb'];
	// 	$_SESSION['password_mb'] = $rows['password_mb'];
	// 	$_SESSION['name_mb'] = $rows['name_mb'];
	// 	$_SESSION['type_mb'] = $rows['type_mb'];

	// 	if($type_mb =='customer')
	// 		{
	// 			echo "Don't agree go to add product";
	// 		}

	// 		else if($type_mb =='admin'){
	// 			header('Location: http:./pageupload1.php');
	// 		}

	// 		else{
	// 			echo "error";
	// 		}

	// }
	


		// header('location:menu_bar.php');


	?>



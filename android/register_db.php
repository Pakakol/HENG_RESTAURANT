<html>
<head>
	<title>สมัครสมาชิก</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>

</body>
</html>
<?php
	
	require './connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
    $name = $_POST['name'];
    $type = $_POST['type'];

	// $profilePicture = $_POST['upfile'];

	//ตรงนี้ต้องชื่อฟิลตรงกับในดาต้าเบส
	$sql ="INSERT INTO member (username_mb,password_mb,name_mb,type_mb)
		   VALUES ('$username','$password','$name','$type')";

    $objsql = mysqli_query($conn,$sql);

    if (!$objsql) {
    	echo ($objsql);
    	echo "Error";
    }else{
    	
    	header('location:login.php');

    }

?>
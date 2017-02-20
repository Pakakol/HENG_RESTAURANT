<meta charset="UTF-8">

<?php
	
	require './connect.php';

	
	$search = $_POST['search'];
	


	//ตรงนี้ต้องชื่อฟิลตรงกับในดาต้าเบส

	$sql ="SELECT * FROM Uploads WHERE typeWork LIKE '%$search%'; ";

    $query = mysqli_query($objConnect,$sql);

    // echo $sql;


    if (!$query) {
    	
    	echo "Error";
    }else{

    	//ตรงนี้ให้มันวนลูป แสดงผลออกมา
    	
    	while($rows=mysqli_fetch_array($query)){

    	echo $rows['pictureWork'];
    	echo $rows['nameWork'];
    	echo $rows['typeWork'];
    	echo $rows['workCaption'];
    	echo $rows['workPrice'];

    	}
    	

    }

?>

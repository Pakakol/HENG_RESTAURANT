<?php
error_reporting (E_ALL ^ E_NOTICE);
    require './connect.php';
        
        $student_ID = $_POST['student_ID'];


$sql ="INSERT INTO status_works (student_ID) 
       VALUES('$student_ID')";


$query = mysqli_query($objConnect,$sql);


if (!$query) {
    	
    	echo "Error!";
    }else{
    	
    	
    	 echo "Successful!";

       

    }
 ?>

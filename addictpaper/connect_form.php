<?php
    require './connect.php';
    session_start();

    $name = $_POST['name'];

    $surname = $_POST['surname'];

	$type = $_POST['type'];

	$papersize = $_POST['papersize'];

	$color = $_POST['color'];

	$types = $_POST['types'];

    $student_ID = $_POST['student_ID'];

    //$upfile = $_POST['upfile'];




// // Where the file is going to be placed 
 //$target_path = "uploads/";

//  Add the original filename to our target path.  
 //Result is "uploads/filename.extension" 
 //$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 


 // $imgeupload = $_FILES['upfile']['tmp_name'];
 // $imageupload_name =  $_FILES['upfile']['name'];



 // if(isset($_POST['upfile'])){

 // 		if($imgeupload){
 // 			$arraypic = explode(".",$imageupload_name);
 // 			$filename = $arraypic[0];
 // 			$filetype = $arraypic[1];

 // 				if($filetype == "jpg" ||$filetype || "pdf"){
 // 					$newimage = $filename.".".$filetype;
 // 					copy($imgeupload, "photos/".$newimage);
 // 				}
 		

 //------------------------------------------------------------

// $upfile = $_POST["upfile"];
// if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
// 	move_uploaded_file($_FILES["upfile"]["tmp_name"], "$upfile/upfile.jpg");
// 	print"Saved uploaded file as $upfile/upfile.jpg\n";

// }else{
// 	print "Error";
// }

 if($_FILES['upfile']['error']==4){

		echo "ไม่มีไฟล์";

	}else{

			$file =$_FILES['upfile']['name'];
			$_FILES['upfile']['tmp_name'];
			$filename=$_FILES['upfile']['name'];
			$array_last = explode(".", $filename);
			$num = count($array_last)-1;
			$lastname = strtolower($array_last[$num]);

			if ($lastname =="pdf" || $lastname =="psd" || $lastname == "ai") {

			

				$fname = $array_last[0];
				$lname = $array_last[1];
				$time=time();

				$newname = $time.".".$lname ;
				$path = 'uploads/';

				$fullpath = $path.$newname;

				
				$sql="INSERT INTO paperwork (name,surname,student_ID,type,papersize,color,types,upfile) 
				VALUES('$name','$surname','$student_ID','$type','$papersize','$color','$types','$fullpath')";
				
				$query = mysqli_query($objConnect,$sql);


}
}

include 'gen_pdf.php';
	
?>


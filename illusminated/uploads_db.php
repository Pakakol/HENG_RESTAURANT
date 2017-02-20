<?php session_start();
    $page_name = basename($_SERVER['PHP_SELF']);
  ?>

<?php
	
	require './connect.php';


	if($_FILES["imgFile_f"]["size"]==0) {
		echo "<p>Please input your picture</p>";
		echo '<p><a href="javascript:window.history.back();">back to add picture</a></p>';
	}
    else {


$target_dir = "PicsWorks/";
$target_file = $target_dir . basename($_FILES["imgFile_f"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imgFile_f"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
} else {
// Check file size
if ($_FILES["imgFile_f"]["size"] > 500000) {
    echo "<script>window.alert('Sorry, your file is too large')</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imgFile_f"]["tmp_name"], $target_file)) {
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

    if($uploadOk!=0) {

    } else {
        echo "<p>Can't upload your picture</p>";
        ?>
        <?php
        // header('location:signup.php');
    } 

}
	// echo $target_file;	

	$pic = $target_file;

	$namework = $_POST['namework'];
	$typework = $_POST['typework'];
	$describe = $_POST['describe'];
	$price = $_POST['price'];
    $memberId = $_SESSION['memberId'];


	

	//ตรงนี้ต้องชื่อฟิลตรงกับในดาต้าเบส

	$sql ="INSERT INTO Uploads (pictureWork,nameWork,typeWork,workCaption,workPrice,memberId) 
		   VALUES ('{$pic}','{$namework}','{$typework}','{$describe}','{$price}','{$memberId}')";

    $query = mysqli_query($objConnect,$sql);


    if (!$query) {
    	
    	echo "Error";
    }else{
    	
    	
    	header('location:upload_success.php');

    }

?>
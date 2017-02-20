<html>
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/news_upload_style.css">
</head>
<body>
<?php
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
//$objDB = mysql_select_db("mydatabase");
require './connect.php';
$strSQL = "SELECT * FROM product WHERE id_product = '".$_GET["id_product"]."' ";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysqli_fetch_array($objQuery);
?>
<div class="bg">
	<div class="tb1">
		<form name="form1" method="post" action="pageupload5.php?id_product=<?php echo $_GET["id_product"];?>" enctype="multipart/form-data">
		<center>
		<br>
		<div>EDIT PRODUCT</div>
		Name : <input type="text" name="name" value="<?php echo $objResult["name"];?>"><br>
		Price : <input type="text" name="price" value="<?php echo $objResult["price"];?>"><br><br>
		<img src="product/<?php echo $objResult["img_product"];?>" height=300 width=350><br>
		Picture : <input type="file" name="img_product"><br>
		<div class="data"><input type="hidden" name="hdnOldFile" value="<?php echo $objResult["img_product"];?>"></div>
		<div class="data"><img id="myImg" src="" alt="choose your product image" height=300 width=350></div>
		<!-- <div class="submit1"><input name="btnSubmit" type="submit" value="Submit"></div> -->
		<button name="btnSubmit" type="submit" value="Submit">Edit</button><br>
		</center></form>
	</div>
</div>

<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="./js/jquery.filer.min.js"></script>
<script type="text/javascript" src="./js/imgload.js"></script>
</body>
</html>
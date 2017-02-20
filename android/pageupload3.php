
<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<link rel="stylesheet" type="text/css" href="css/news_upload_style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<style>@import url('https://fonts.googleapis.com/css?family=Prompt:400,500,800');</style>
<body>
<?php
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
//$objDB = mysql_select_db("mydatabase");
require './connect.php';
$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<div class="bg2">
<div class="tb1">
	<br>
<center><h1>LIST PRODUCT</h1></center>
<table width="900px" border="1">
<tr>
<th width="120"> <div align="center">Product ID </div></th>
<th> <div align="center">Picture</div></th>
<th width="100"> <div align="center">Name</div></th>
<th width="100"> <div align="center">Price</div></th>
<th width="100"> <div align="center">Edit</div></th>
<th width="100"> <div align="center">Delete</div></th>

</tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
<br>
<tr>
<td><div align="center"><?php echo $objResult["id_product"];?></div></td>
<td><center><img src="product/<?php echo $objResult["img_product"];?>"></center></td>
<td><center><?php echo $objResult["name"];?></center></td>
<td><center><?php echo $objResult["price"];?></center></td>
<td><center><a href="pageupload4.php?id_product=<?php echo $objResult["id_product"];?>">Edit</a></center></td>
<td><center><a href="pageupload6.php?id_product=<?php echo $objResult["id_product"];?>">Delete</a></center></td>
</tr>
<?php
}
?>
</table>
<div class="con-btn">
<center>
	<form name="form1" method="post" action="pageupload1.php" enctype="multipart/form-data">
	<!-- <input name="btnSubmit" type="submit" value="Insert"> -->
	<button name="btnSubmit" type="submit">Add Product</button>
	</form>
</center>
</div>

<div class="btn-lo">
<center>
	<form name="form2" method="post" action="logout.php" enctype="multipart/form-data">
	<!-- <input name="btnSubmit" type="submit" value="logout"> -->
	<button name="btnSubmit" type="submit" >Log out</button>
	</form>
</center>
</div>

</div>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
 <html>
<head>
<title>insert product</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/news_upload_style.css">

</head>
<body>
<div class="bg2">
<div class="tb1">
	<br>
	<center>
	<h1>input Product</h1>
	<form name="form1" method="post" action="pageupload2.php" enctype="multipart/form-data">
	<!-- <div class="data">ID : <input type="text" name="id_product"><br></div> -->
	<div class="data">Name : <input type="text" name="name"><br></div>
	<div class="data">Price : <input type="text" name="price"><br></div>
	<div class="data">Picture : <input type="file" name="img_product"><br></div>
	<div class="data"><img id="myImg" src="" alt="choose your product image" height=300 width=350></div>
	<!-- <div class="submit1"><input name="btnSubmit" type="submit" value="Submit"></div> -->
	<button name="btnSubmit" type="submit" value="Submit">Update</button>
	<div class="data"><a href="pageupload3.php">Go to list Product</a></div>
	</center>
</div>
</div>
</form>

<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="./js/jquery.filer.min.js"></script>
<script type="text/javascript" src="./js/imgload.js"></script>

</body>
</html>

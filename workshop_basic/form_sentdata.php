<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>1.ตัวอย่างส่ง/รับข้อมูล $_POST(tag input)</div><br>
	<form action="complete.php" method="post">
		<input type="text" name="fname">
		<input type="text" name="lname">
		<input type="submit" value="submit">
	</form>
	<br>
	<div>2.ตัวอย่าง ส่ง/รับข้อมูล $_POST(tag select)</div><br>
	<form action="complete.php" method="post">
		<select name="fname">
			<option value="ไก่">ไก่</option>
			<option value="ไข่">ไข่</option>
		</select>

		<select name="lname">
			<option value="ควาย">ควาย</option>
			<option value="งู">งู</option>
		</select>
		<input type="submit" value="submit">
	</form>
	<br>
	<br>
	<div>3.ตัวอย่าง ส่งรับข้อมูล $_GET</div><br>

	<a href="complete2.php?fname=ไก่&lname=1234 ">ทดสอบส่งค่าGET</a>


</body>
</html>
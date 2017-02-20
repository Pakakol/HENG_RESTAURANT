<?php
if(isset($_POST['score'])){
		$score = $_POST['score'];
	}
function calgrade($score){
if($score>=80 && $score<=100){
echo "You get A <br>";
}if($score>=70 && $score<=79){
echo "You get B"."<br>";
}if($score>=60 && $score<=69){
echo "You get C"."<br>";
}if($score>=50 && $score<=59){
echo "You get D"."<br>";
}if($score < 50){
echo "You get F"."<br>";
}
return $score;
}
calgrade($score);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="calgrade.php" method="post">
<input type="text" name="score">
<input type="submit">
</form>
</body>
</html>
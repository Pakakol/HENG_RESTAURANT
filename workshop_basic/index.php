<?php

$name = "web11";
$lname = "ictsu";

echo $name."<br>"; // out put web11

$name.$lname."<br>"; // output web11ictsu

echo $name."    ".$lname."<br>"; //output web11 ictsu

$new = $name."   ".$lname."<br>"; // not show cause not have echo


$number1 = 11;
$number2 = 10.5;

$sum = $number1+$number2;

echo $sum."<br>"; // output = 21.5


$chicken = array('father','mother','tofu');

echo $chicken[1]."<br>";

print_r($chicken); //output = Array ( [0] => father [1] => mother [2] => tofu )
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title></title>
</head>
<body>

	<div><?php echo $name;?></div>
	<div><?=$name;?></div><br>
	<?php
		if($number1 == 11){
			echo"<div>".$number1."</div>";
		}
		if($number2 == 10.5){
	//xx?> <!--close php-->
			<div><?=$number2?></div>
	<?php
		}
	?><!--close php-->
		

</body>
</html>
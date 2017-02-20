<?php 

 $x=1;

 while ($x<100) {

 	if($x%3==0 && $x%5==0){
		
		echo "FizzBuzz";
	}
		elseif($x%3==0)

	{
		echo "Fizz";;
	}
		elseif ($x%5==0) {

			echo "Buzz";
		

	}else{
		echo $x.'<br/>';
	}

 	$x++;
 }


 



 ?>
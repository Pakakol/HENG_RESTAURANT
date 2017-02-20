<?php
	$arrayData = array(-1,3,-4,5,1,-6,2,1);

	for($i=0;$i<count($arrayData);$i++)
	{
		$sumLeft = 0;
		$sumRight = 0; 
	for($sum=0; $sum <= $i; $sum++)
	{
		$sumLeft += $arrayData[$sum];
	}
	for($sum=$i; $sum < count($arrayData); $sum++)
	{
		$sumRight += $arrayData[$sum];
	}
	if($sumLeft == $sumRight)
		{
			echo "Array Index : ".$i."<br />";
		}
	}	
?>

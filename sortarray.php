<?php
$array=[1,8,6,2,4,7];
$temp=0;
	for($i =count($array) ;$i >= 0 ;$i--)
{
	if($array[i]<$array[i+1])
		$array[i]=$temp;
	{
		else($array[i]>$array[i+1])
			$array[i+1]=$array[i];
		    $array[i+1]=$temp;
	}
		echo "the sorted array is : "$temp" <br>";
}
?>
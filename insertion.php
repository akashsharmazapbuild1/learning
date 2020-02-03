<?php
function insertion_sort($my_array)
{
 for($i=0;$i<count($my_array);$i++)
 {
 	$val=$my_array[$i];
 	$j=$i-1;
 	while($j>0 && $my_array[$j]>$val)
 	{
 		$my_array[$j+1]=$my_array[$j];
 		$j--;
 	}
 $my_array[$j+1]=$val;
}
return $my_array;
}
$test_array=array(3,0,2,5,1);
echo "original array :<br>";
echo implode (',',$test_array);
echo "sorted array:<br>";
print_r(insertion_sort($test_array))
?>
<?php
$str="attention";
$array=str_split($str);
for($i=0;i<count($array);i++)
{
	for($j=0;$j<count($array);$j++)
{
	if($array[$i]!=$array[j] && $j!=$i)
	{
		unset($array[$j]);
	}
}}
<?php
class Car{
	function color(){}
}
class Audi extends Car
{
	function color()
	{
		echo "audi color is blue <br>";
	}
}
class Hondacity extends Car
{
	function color()
	{
		echo "hondacity color is mattblue <br>";
	}

}
$arr[]=array(1);
$arr[0]=new Audi();
$arr[1]=new Hondacity();
 for($i=0;$i<2;$i++)
 {
 	$arr[$i]->color();
 }
 ?>
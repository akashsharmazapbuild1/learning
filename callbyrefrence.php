<?php
function a(&$x)
{
	$x=100;
}
$x=9;
a($x);
echo $x;
?>
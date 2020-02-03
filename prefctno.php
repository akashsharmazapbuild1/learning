<?php 
function isPerfect($n) 
{ 
	// To store sum of divisors 
	$sum = 1; 

	// Find all divisors and add them 
	for ($i = 2; $i * $i <= $n; $i++) 
	{ 
		if ($n % $i == 0) 
		{ 
			if($i * $i != $n) 
				$sum = $sum + $i + (int)($n / $i); 
			else
				$sum = $sum + $i; 
		} 
	} 
	// If sum of divisors is equal to 
	// n, then n is a perfect number 
	if ($sum == $n && $n != 1) 
		return true; 

	return false; 
} 

echo "Below are all perfect numbers till 10000\n"; 
for ($n = 2; $n < 10000; $n++) 
	if (isPerfect($n)) 
		echo "$n is a perfect number\n"; 
?> 

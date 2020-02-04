<?php 
function demo($var) { 
	echo " Before try block". "<br>"; 
	try { 
		echo "\n Inside try block". "<br>"; 
		if($var == 0) 
		{ 
				 
			throw new Exception('Number is zero.'); 
				
			echo "\n After throw (It will never be executed)" ."<br>"; 
		} 
	} 
		 
	catch(Exception $e) { 
			echo "\n Exception Caught", $e->getMessage(). "<br>"; 
		} 
	
		echo "\n After catch (will be always executed)". "<br>"; 
} 

demo(5); 
demo(0); 
?> 

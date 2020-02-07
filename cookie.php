<?php
cookie_name="abcd";
cookie_value="efgh";
cookie($cookie_name,$cookie_value,time()+86400*3);//86400 sec =1day
if(!isset($_COOKIE[cookie_name])){
	echo "COOKIE name".$cookie_name."is not set";
}
else{
	echo "cookie".$cookie_name ."is set <br>";
	echo "value is:".$_COOKIE($cookie_name);
}
?>
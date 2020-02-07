<?php
session_start();
if(isset($_SESSION['counter']))//check variable is set or not
{
	$_SESSION['counter']=+1;//increamented each time the page is visited during session
}
else{
	$_SESSION['counter']=1;
}
$msg="you open this page".$_SESSION['counter']. "in this session";
echo($msg);
print_r($_SESSION) ;
unset($_SESSION['counter']);//destroy session,single variable
print_r($_SESSION);// use print to see diffrence before and after destroy of session
?>
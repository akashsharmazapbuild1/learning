<?php
$current_date_time_sec=strtotime(2020-06-19 13:44:02);
$future_date_time_sec=strtotime(2020-10-13 23:04:22);
$diffrence=$future_date_time_sec - $current_date_time_sec;
$hours= ($diffrence/3600);
$minutes=($diffrence/60%60);
$seconds=($diffrence%60);
$days=($hours/24);
$hours=($hours%24);
echo "the diffrence is <br>";
if($days<0)
{
	echo ceil($days). "days AND";
}
else
{
	echo floor($days)."days AND";
}
echo sprintf("%02d",$hours). ":". sprintf("%02d",$minutes).":". sprintf("%02d",$seconds);
?>
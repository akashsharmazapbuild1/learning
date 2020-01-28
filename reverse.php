<?php
$str = "akash";
$array = str_split($str);

for($i =count($array) ;$i >= 0 ;$i--){
  $new_str .= $array[$i]."";
 
}

echo $neww_str;
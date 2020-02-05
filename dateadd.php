 <?php
$date=date_create("2020-02-05");
date_add($date,date_interval_create_from_date_string("4 days"));
echo date_format($date,"d-m-y");
?> 
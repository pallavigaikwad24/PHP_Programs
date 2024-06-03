<?php

echo date("l \n"); // to access day
echo date("d \n"); // to access Date
echo date ("F \n"); // month
echo date ("y \n"); // year

print_r (getdate());

// print_r (localtime());

$date = date_create("2013-05-01");

date_time_set ($date,13,24);
echo date_format($date,"Y-m-d H:i:s") . "\n";

// Return an associative array with detailed information about a specified date
print_r (date_parse("2013-05-01 12:30:45.5"));

$date = date_create();
date_date_set ($date,2020,10,30);
echo date_format ($date,"Y/m/d");

$newformat = date_create_from_format ('j-M-Y', "24-Aug-2023");

print_r (date_format($newformat, 'Y/m/d'));

echo "\n";

date_default_timezone_set ('Asia/Kolkata');
echo date ("h:i:sa");

// Creating date from string

$set_date = strtotime ("12am 24 Aug 2001");

echo "\nDate is: ". date("Y-m-d h:i:sa", $set_date)

?>
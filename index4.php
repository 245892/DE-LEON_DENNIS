<?php

// Declare and define two dates
$date1 = strtotime("2016-06-01 22:45:00"); 
$date2 = strtotime("2019-09-21 10:44:01"); 
  
// Formulate the Difference between two dates
$diff = abs($date2 - $date1); 
  
  
// To get the year divide the result date into
// total seconds in a year (365*60*60*24)
$years = floor($diff / (365*60*60*24)); 
  
  
// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
$months = floor(($diff - $years * 365*60*60*24)
                               / (30*60*60*24)); 
  
  
// To get the day, subtract it with years and 
// months and divide the resultant date into
// total seconds in a days (60*60*24)
$days = floor(($diff - $years * 365*60*60*24 - 
             $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days ", $years, $months, $days); //Formatting the output years, months, days
  
?>
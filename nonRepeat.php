<?php

$numbers=array("red","blue","black","red","blue","blue","red","gold");

$counter_numbers = array_count_values($numbers); //count the number of occurence

print_r($counter_numbers);  //Output array and occurence


$unique_numbers = [];          // new array

foreach ($counter_numbers as $number => $count) {
    if ($count === 1) {
        $unique_numbers[] = $number;  //Assign to the array value and occurence
    }
}

print_r($unique_numbers);   // Output the array

?>
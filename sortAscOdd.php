<?php

$numbers=array(9863, 7127, 2020, 80, 131, 55, 100);
sort($numbers);                                    // Sort numbers in Ascending Order

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
	if($numbers[$x]%2!=0){
		echo (ceil($numbers[$x]));           //Round up number to nearest ten if odd number
		echo "<br>";
	}
	else{
  echo $numbers[$x];
  echo "<br>";
     }
  }
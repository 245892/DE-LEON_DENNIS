<?php
$sum=0;
$x=0;
while($x<=10){
	if($x%2==0){
     $sum=$sum+$x;   //add to sum if modulo is equal to zero
	}
    $x++;           //increment the loop
}
echo "The sum of the numbers is:$sum";  //Output sum of even numbers 0-10

?>


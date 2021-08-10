<?php

function isPerfectSquare($x)
{
    $s = (int)(sqrt($x));       //get the squareroot of Fibonacci number
    return ($s * $s == $x);
}
 
// Returns true if n is a
// Fibonacci Number, else false
function isFibonacci($n)
{
    // n is Fibonacci if one of
    // 5*n*n + 4 or 5*n*n - 4 or
    // both is a perferct square
    return isPerfectSquare(5 * $n * $n + 4) ||
           isPerfectSquare(5 * $n * $n - 4);
}
 
for ($i = 1; $i <= 10; $i++){
if(isFibonacci($i))
echo "$i is a Fibonacci Number". "<br>";
else
echo "$i is a not Fibonacci Number"."<br>" ;
}
?>

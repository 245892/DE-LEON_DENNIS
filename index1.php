<?php

   
    function Palindrome($MyString) {
  $l = 0;                             
  $r = strlen($MyString) - 1;       //get the length of the string minus 1
  $flag = 0;

  while($r > $l){                          //condition of the loop
    if ($MyString[$l] != $MyString[$r]){      //compare the values in the string, if it is not equal
      $flag = 1;                              //,such as flag 1,the condition statement would exit
      break;
    }
    $l++;                                    //increment $l                         
    $r--;                                    //decrement $r
  }

  if ($flag == 0){                               //when the values in the string are equal
    echo $MyString." is a Palindrome.\n";     //it is Palindrome
  } else {
    echo $MyString." is not a Palindrome.\n";
  }
}

Palindrome("radar"); 
echo "<br>";                                                       //function input or call
Palindrome("luggage");
echo "<br>";
Palindrome("tapat");
?>
<?php

  function Reverse($MyString) {                             
  $r = strlen($MyString)-1;
  

  for($x=$r;$x>=0;$x--){                          //condition of the loop
    echo $MyString[$x];
  }
   
  }

  Reverse("passage");

 ?>
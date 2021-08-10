<?php
 $n = 0; $m = 1; $s = 0; $i;
       
          
            echo $n . " " . $m . " "; // printing 0 and 1
            
            for ($i = 2; $i < 10; $i++) // loop starts from 2 because 0 and 1 are already printed
            {
                $s = $n + $m;
                echo $s . " ";
                $n = $m;                //assign $m to old number and $s to current number
                $m = $s;
            }

?>
<?php
function pypart($n) 
{ 
       
    for ($i=0; $i<=$n; $i++) 
    { 
         
        for($j=5; $j>=$i; $j-- ) 
        { 
              
            echo "* "; 
        }  
        echo "<br>"; 
    } 
}
 $n=5;
 pypart($n);
?>
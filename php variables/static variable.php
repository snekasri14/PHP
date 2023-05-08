<?php  
    function goodmorning () { 
        static $s = 1;
        $a = 5;  //local variable  
        $b = 5; //local variable
        echo $a+$b; 
    }  
    goodmorning();  
?>  
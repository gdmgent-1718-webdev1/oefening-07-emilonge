<?php
$x = 0;    
$y = 1; 

/**
 * @return string
 */

function fibonacci($x, $y)
{
    for($i=0 ; $i<=100 ; $i++)    
    {    
        $z = $x + $y;    
        echo $z, PHP_EOL;         
        $x=$y;       
        $y=$z;     
    }   
};

echo fibonacci($x, $y);
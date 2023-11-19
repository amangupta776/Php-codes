<?php
function byreference(&$numX){
    $numX=$numX+1;
    echo "The value of variable in function ".$numX."<br>";
}
$numX=5;
echo "THe value before function call ".$numX."<br>";
byreference($numX);
echo "THe value after function call ".$numX."<br>";
?>
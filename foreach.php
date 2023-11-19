<?php
$num=array(2,3,4,6,9);
$num1=0;
foreach($num as $value){
    echo "The value of array at index $num1 is $value <br>";
    $num1=$num1+1;
}
echo "<br>";
print_r($num);
echo "<br>";
var_dump($num);
?>
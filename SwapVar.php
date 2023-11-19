<?php
if($_GET){
    $first=$_GET["r"];
$second=$_GET["a"];
}
echo "Before swap Value of first is $first and second is $second<br>";
$temp =$first;
$first=$second;
$second=$temp;
echo "After swap Value of first is $first and second is $second";
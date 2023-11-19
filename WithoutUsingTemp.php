<?php
$first=10;
$second=20;
echo "Before swap Value of first is $first and second is $second<br>";
$first=$first+$second;
$second=$first-$second;
$first=$first-$second;
echo "After swap Value of first is $first and second is $second";
<?php
$i = 1;
$sum=0;
while ($i < 11) {
    if ($i % 2 == 0) {
       $sum+=$i;
    }
    $i++;
}
echo $sum;
?>

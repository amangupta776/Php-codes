<?php
if($_POST){
    $a=$_POST["a"];
    $b=$_POST["b"];
$sum=1;
for($i=1;$i<=$b;$i++){
$sum*=$a;
}
echo $sum;
}
?>
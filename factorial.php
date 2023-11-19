<?php
if($_POST){
$num=$_POST["a"];
if($num==0 or $num==1){
    echo 1;
    goto a;
}
$Fac=1;
while($num>0){
$Fac*=$num;
$num--;
}
echo $Fac;
}
a:
?>
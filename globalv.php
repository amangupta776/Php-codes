<?php
function add5(){
    global $a;
    $a=$a+5;
}
$a=9;
add5();
echo $a;
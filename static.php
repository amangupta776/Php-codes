<?php
function counter(){
    static $num=0;
    return ++$num;
}
echo  counter(),"<br>";
echo  counter(),"<br>";
echo  counter();
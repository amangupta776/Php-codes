<?php
class number{
var $num;
var $num2;
function add(){
    $sum=$this->num+$this->num2;
    echo  "Addition of two number is $sum <br>";
}
function subt(){
    $sub=$this->num-$this->num2;
    echo  "subtraction of two number is $sub <br>";
}

}
$obj1=new number();
$obj1->num=11;
$obj1->num2=9;
$obj1->add();
$obj1->subt();
?>
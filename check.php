<?php
if($_GET){
$check=$_GET["a"];
echo ($check%2==0)?  "$check is even" :  "$check is odd";
}

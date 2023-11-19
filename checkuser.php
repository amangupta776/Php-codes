<?php
if($_GET){
$userName=$_GET["user"];
$password=$_GET["pass"];
if($userName=="abc"){
    if( $password=="123"){
    echo "Log in Successfully";
    }else{
        echo "Wrong password";
    }
}else{
    echo "Wrong username ";
}
}
?>
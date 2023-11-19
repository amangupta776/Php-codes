<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter index: <input type="text" name="index" id="">
        <input type="button" value="RESULT">
    </form>
    <?php
$arr=array(1,5,6,9,22);
if($_POST){
$index=$_POST["index"];
    echo "<br>In $index Index Value is $arr[$index]"; 
}
   
?>
</body>
</html>
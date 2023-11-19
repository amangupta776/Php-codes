<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        FirstNumber: <input type="number" name="first"><br><br>
        SeondNumber: <input type="number" name="second"><br><br>
        <input type="submit" value="Sum">
    </form>
    <?php
    function add($num1,$num2){
        echo "The sum of two number is ". $num1+$num2."<br>";
    }
    if($_POST){
        $a=$_POST['first'];
        $d=$_POST['second'];
        add($a,$d);
    }
    ?>
</body>
</html>
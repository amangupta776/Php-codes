<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Find Factorial of Any Number: <input type="text" name="first"><br><br>
        <input type="submit" value="Find">
    </form>
    <?php
    function fac($num1){
        if($num1==1 or $num1==1){
            return 1;
        }
       return $num1*fac($num1-1);
    }
    if($_POST){
        $a=$_POST['first'];
        echo "Factorial of $a is ".fac($a)."<br>";
    }
    ?>
</body>
</html>
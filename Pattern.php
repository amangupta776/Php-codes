<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
Name:<input type="text" name="name">
<input type="submit" value="submit">
    </form>
    <?php  
    if($_POST){
        $name=$_POST['name'];
        $f=$name[0];
        for($i=0;$i<=5;$i++){  
            for($k=5;$k>=$i;$k--){  
            echo "  ";  
            }  
            for($j=1;$j<=$i;$j++){  
            echo $f."  ";  
            }  
            echo "<br>";  
            }  
            for($i=4;$i>=1;$i--){  
            for($k=5;$k>=$i;$k--){  
            echo "  ";  
            }  
            for($j=1;$j<=$i;$j++){  
            echo $f."  ";  
            }  
            echo "<br>";  
            } 
    }
 
?>  
</body>
</html>
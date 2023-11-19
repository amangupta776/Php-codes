<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Enter Rows: <input type="number" name="row">
        <input type="submit">
    </form>
</body>
</html>
<?php
if($_GET){
    $rows = $_GET["row"];


    for ($i = 1; $i <= $rows; $i++) {
        if ($i % 2 == 0) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
        } else {
            echo "$i ";
        }
        echo "<br>";
    }
    
    
}
?>

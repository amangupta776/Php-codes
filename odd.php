<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post">
 Number: <input type="number" name="a"> 
  <br><br>
  <input type="Submit" value="Check:Even or odd"> 

 </form>
  <?php
function Check($num){
    if($num%2==0){
        echo "$num is Even";
    }else{
        echo "$num is odd";
    }
}

if($_POST){
    $a=$_POST['a'];
    Check($a);
}
  ?>
</body>
</html>
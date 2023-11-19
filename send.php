<!DOCTYPE html>
<html>
<head>
    <title>Input Processing</title>
</head>
<body>
    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET["r"];
        $Age=$_GET["Age"];
        $Mob=$_GET["Mob"];
        echo "<p>Username: " . $username . "</p>";
        echo "<p>Age: " . $Age . "</p>";
        echo "<p>Mobile Number: " . $Mob . "</p>";
      
    }
    ?>
</body>
</html>

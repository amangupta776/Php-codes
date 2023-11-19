
<!DOCTYPE html>
<html>
<head>
    <title>Duplicate Character Counter</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $duplicate_characters = array();

        for ($i = 0; $i < strlen($name); $i++) {
            $char = $name[$i];
            $count = 0;

            for ($j = 0; $j < strlen($name); $j++) {
                if ($name[$j] == $char) {
                    $count++;
                }
            }

            if ($count > 1 & !in_array($char, $duplicate_characters)) {
                $duplicate_characters[$char] = $count;
            }
        }

        echo "Duplicate characters: ";
        foreach ($duplicate_characters as $char => $count) {
            echo $char . " - " . $count . " times ";
        }

    }
    ?>
</body>
</html>
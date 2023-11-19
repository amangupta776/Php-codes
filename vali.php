<?php
if ($_POST) {
    $username = $_POST["name"];
    $password = $_POST["pass"];

    $isThereNumber = false;
    $isThereAlpha = false;

    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_digit($password[$i])) {
            $isThereNumber = true;
            break;
        }
    }

    for ($i = 0; $i < strlen($username); $i++) {
        if (ctype_alpha($username[$i])) {
            $isThereAlpha = true;
            break;
        }
    }

    if (strlen($username) >= 8 && $isThereAlpha && strlen($password) >= 6 && $isThereNumber) {
        echo "Log in Successfully";
    } else {
        echo "Log in failed";
    }
}
?>

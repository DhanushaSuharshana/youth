<?php
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = "abcd";
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
header('location:https://nysc.lk/session/login.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    </body>
</html>

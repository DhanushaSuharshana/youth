<?
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = "abc";
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

header("Location: test2.php");

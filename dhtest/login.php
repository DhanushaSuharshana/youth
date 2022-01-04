<?php

session_start();
if (!isset($_SESSION['username'])) {
    echo "nope";
} else {
    var_dump($_SESSION);    
}
?>
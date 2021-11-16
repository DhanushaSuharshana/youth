<?php

// root URL
$host = $_SERVER['HTTP_HOST'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
define('HOST', $host);
define('DEVELOPMENT_MODE', 1);

define('URL', $protocol . $host . '/youth/');
define('URL_PUBLIC', URL.'public/');

define('MHOST', 'dtecsolution.com');
define('MUSERNAME', 'info@dtecsolution.com');
define('MPASSWORD', 'UuE6F8#T.VBf');
define('MTITLE', 'Sri Lanka Youth');
define('MPORT', '587');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'nysc');
define('DB_USER', 'root');
define('DB_PASS', '');
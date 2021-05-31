<?php

// root URL
$host = $_SERVER['HTTP_HOST'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
define('HOST', $host);
define('DEVELOPMENT_MODE', 1);

define('URL', $protocol . $host . '/youth/');

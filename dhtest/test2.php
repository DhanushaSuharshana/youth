<?
if (!isset($_SESSION)) {
session_start();
}
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

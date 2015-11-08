<?php 
$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS = 'apmsetup';
$DB_NAME = 'woowon';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$connect= mysql_connect("localhost","root","apmsetup");
mysql_select_db("woowon", $connect);
?>

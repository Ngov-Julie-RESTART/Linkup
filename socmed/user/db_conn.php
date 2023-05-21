<?php


$usname = "localhost";
$usename = "root";
$password = "";

$db_name = "linkup";

$conn = mysqli_connect($usname, $usename, $password, $db_name);

if(!$conn) {
    echo "Connection failed";
}
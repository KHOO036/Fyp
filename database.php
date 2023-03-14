<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "fyp";

$connect = mysqli_connect($server, $user, $pass, $database);

if (!$connect) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
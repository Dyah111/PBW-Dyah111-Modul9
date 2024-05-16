<?php
$host = "localhost";
$user = "root";
$pass = "saya@jejes28*#";
$db = "mydiary";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database error!");
}
?>
<?php
$host = "localhost"; // or your hosting SQL server
$user = "root"; // or your hosting DB username
$pass = ""; // or your hosting DB password
$db   = "mess_db"; // or your hosting DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

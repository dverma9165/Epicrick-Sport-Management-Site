<?php

$servername = "localhost";
$username = "";
$password = "";
$database = "tb_user";

$conn = mysqli_connect("localhost", "root", "", "event_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

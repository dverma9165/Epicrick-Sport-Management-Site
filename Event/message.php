<?php

try {
    $db = new mysqli("localhost", "root", "", "event_db");
} 
catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $is_insert = $db->query("INSERT INTO  data (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");


}

?>

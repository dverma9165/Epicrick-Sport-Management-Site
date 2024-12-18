<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmpassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert('Username or Email has already been taken');</script>";
    } else {
        if ($password == $confirmPassword) {
            $query = "INSERT INTO tb_user (name, username, email, phone, password) VALUES ('$name', '$username', '$email', '$phone', '$password')";
            mysqli_query($conn, $query);
            header("location: login.php");
        } else {
            echo "<script> alert('Password does not match'); </script>";
        }
    }
}
?>


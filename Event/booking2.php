<?php
require_once('booking_db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $services = $_POST["services"];
    $phone = $_POST["phone"];
    $starting_date = $_POST["starting_date"];
    $ending_date = $_POST["ending_date"];

    if (strtotime($starting_date) > strtotime($ending_date)) {
        echo "Error: The starting date cannot be later than the ending date!";
        exit;
    }

    $checkSql = "SELECT * FROM bookings WHERE starting_date = '$starting_date'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        echo "Error: The day you are booking is already full, select another date!";
    } else {
        $sql = "INSERT INTO bookings (name, email, services, phone, starting_date, ending_date)
                VALUES ('$name', '$email', '$services', '$phone', '$starting_date', '$ending_date')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Booking submitted successfully!'); window.location.href='index.html';</script>";
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

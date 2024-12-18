<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        h2{
            font-size: 3vw;
            margin-top: 2vw;
            text-align: center;
        }
        table {
            margin-top: 1vw;
            justify-content: center;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="Navigation">
        <label class="logo">EPICRICK</label>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="http://localhost/event/contact.php">Message</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
    </div>
    <h2>REPORTS</h2>
    <table>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>SERVICES</th>
            <th>PHONE</th>
            <th>STARTING DATE</th>
            <th>ENDING DATE</th>
        </tr>
        <?php
        require_once('booking_db.php');

        $sql = "SELECT * FROM bookings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["services"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["starting_date"] . "</td>";
                echo "<td>" . $row["ending_date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No bookings found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <div id="aboutus">
        <div class="backgroundimg"> 
            <div class="loginpage">
                <div class="organize"><p>We organize only tennis ball cricket competition.</p></div>
                <div class="contact_us"><p>Contact Us</p></div>
                <div class="contact_no"><i class="fa fa-phone"></i><p>9165931016</p></div>
                <div class="contact_mail"><i class="fa fa-envelope email"></i><p>dverma9165@gmail.com</p></div>
                <div class="last"><p>2024, All Right Reserved @ EpiCrick | Web Design & Development By Deepak Verma</p></div>
            </div>
        </div>
   </div>
</body>
</html>

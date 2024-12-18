<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Booking Form</title>
  <link rel="stylesheet" href="booking_style.css">
</head>
<body>
    <div class="background">
        <div class="booking-form">
            <h2>Travel Booking Form</h2>
            <form action="booking2.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
 
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
           
                <label for="services">Services:</label>
                <select name="services" id="services" required>
                    <option value="daylow">Day Low</option>
                    <option value="daymid">Day Mid</option>
                    <option value="dayhigh">Day High</option>
                    <option value="nightlow">Night Low</option>
                    <option value="nightmid">Night Mid</option>
                    <option value="nighthigh">Night High</option>
                  </select>

                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone" required>
                  
                <label for="starting_date">Starting Date:</label>
                <input type="date" name="starting_date" id="starting_date" required>
               
                <label for="ending_date">Ending Date:</label>
                <input type="date" name="ending_date" id="ending_date" required>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </div>
</body>
</html>

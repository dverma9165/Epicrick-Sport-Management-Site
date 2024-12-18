<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration </title>
    <link rel="stylesheet" href="registration_style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php
  
  include("registration_process.php");
  
  ?>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post" autocomplete="off">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" id="name" placeholder="Enter your name" required value="">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username" required value="">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" required value="">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" id="phone" placeholder="Enter your number" required value="">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" required value="">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm your password" required value="">
          </div>
        </div>
        <div class="button">
          <button type="submit" name="submit">Register</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
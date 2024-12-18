<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <?php
    
    include("login_process.php");
    
    ?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form class="" action="" method="post" autocomplete="off">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="usernameemail" id="usernameimail" placeholder="Username" required value="">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required value="">
          </div>
          <div class="button">
            <button type="submit" name="submit">Login</button>
          </div>
          <div class="signup-link">Not a member? <a href="regisration.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
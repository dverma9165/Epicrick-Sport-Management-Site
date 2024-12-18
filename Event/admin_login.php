<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: lightcyan;
  overflow: hidden;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.3);
}
.wrapper .title{
  height: 90px;
  background: crimson;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: crimson;
  border: 1px solid crimson;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button button{
  width: 100%;
  border-radius: 4px;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: crimson;
  border: 1px solid crimson;
  cursor: pointer;
}
form .button button:hover{
  background: lightcoral;
  border: 1px solid lightcoral;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
    </style>
  </head>
  <body>
    <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['usernameemail']) && !empty($_POST['password'])) {
        $username = $_POST['usernameemail'];
        $password = $_POST['password'];

        $admin_username = 'admin';
        $admin_password = 'admin';

        if ($username === $admin_username && $password === $admin_password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: booking_report.php");
            exit;
        } else {
            echo "<p style='color: red;'>Invalid username or password!</p>";
        }
    } else {
        echo "<p style='color: red;'>Please enter both username and password!</p>";
    }
}
?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Admin login</span></div>
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
        </form>
      </div>
    </div>

  </body>
</html>
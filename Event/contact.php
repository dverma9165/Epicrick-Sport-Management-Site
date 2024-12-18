<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function showMessagePopup() {
            alert("Thanks, your request has been submitted.");
        }
    </script>
</head>
<body>
    <?php
        include("message.php")
    ?>
    <div class="Navigation">
        <label class="logo">EPICRICK</label>
        <ul>
            <li><a href="index.html">Home</a></li>
        </ul>
    </div>
    <div class="message">
        <form method="post" class="form" onsubmit="showMessagePopup();">
            <h1>Message Us</h1>
            <div class="form_box">
                <input type="text" name="name" placeholder="Name" class="form1">
                <input type="email" name="email" placeholder="Email" class="form1">
                <textarea name="message" placeholder="Type your requests." cols="30" rows="10" class="form2"></textarea>
                <input type="submit" value="submit" class="form3">
            </div>
        </form>
    </div>
</body>
</html>

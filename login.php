<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-form"> <!-- #contact-form -->
        <h1>Log In</h1>
    <div class="log-in"> <!-- #contact-us -->
        <form action="adminsave.php" method="POST">
            <input type="email" name="adminemail" class="login-card" placeholder="Email"><br>  <!-- #form-card -->
            <input type="password" name="adminpassword" class="login-card" placeholder="Password"><br>
            <!-- <input type="submit" value="LOG IN" class="login-submit" ><br> #form-submit  -->
            <button type="submit" name= "adminlogin" class="login-submit">Log IN</button><br>
            <!-- <a href="#">Forgot Password? </a> -->
        </form>
    </div>
</div>

<?php


?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-form">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-us">
        <form action="save.php" method="post">
            <input type="text" name="fname" class="form-card" placeholder="First Name"><br>
            <input type="text" name="lname" class="form-card" placeholder="Last Name"><br>
            <input type="email" name="email" class="form-card" placeholder="Email"><br>
            <input type="text" name="phonenumber" class="form-card" placeholder="Phone Number"><br>
            <input type="text" name="message" class="form-card" placeholder="Your Message"><br>
            <input type="submit" value="Submit" class="form-submit" ><br>
        </form>
        <!-- <div class="socialmedia">
            add social media btns
        </div> -->
    </div>
</body>
</html>
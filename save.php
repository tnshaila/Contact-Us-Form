<?php

$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$email = $_POST["email"];
$phoneNumber = $_POST["phonenumber"];
$message = $_POST["message"];

$connection = mysqli_connect("localhost", "root", "Tan.1234", "contactusinfo");
if(!$connection)
 die("Could Not Connect to Database".mysql_connect_error()); 

$query = "INSERT INTO contactinfo(FirstName, LastName, Email, PhoneNumber, Messages) 
VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$phoneNumber}', '{$message}')";
$result = mysqli_query($connection, $query) or die("Could not store into database");

?>


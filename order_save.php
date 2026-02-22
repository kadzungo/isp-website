<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$package = $_POST['package'];
$notes = $_POST['notes'];

$sql = "INSERT INTO orders (name, email, phone, location, package) 
        VALUES ('$name', '$email', '$phone', '$location', '$package')";

if(mysqli_query($conn, $sql)){
    echo "<h2>Thank you! Your order has been received.</h2>";
    echo "<a href='index.php'>Return Home</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name     = mysqli_real_escape_string($conn, $_POST['name']);
    $phone    = mysqli_real_escape_string($conn, $_POST['phone']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $package  = mysqli_real_escape_string($conn, $_POST['package']);
    $notes    = mysqli_real_escape_string($conn, $_POST['notes']);

    // Save to database
    $sql = "INSERT INTO orders (name, phone, email, location, package, notes)
            VALUES ('$name', '$phone', '$email', '$location', '$package', '$notes')";

    if (mysqli_query($conn, $sql)) {

        // 📲 WHATSAPP MESSAGE
        $msg = urlencode(
            "🚀 NEW FLASHFIBER ORDER\n\n" .
            "👤 Name: $name\n" .
            "📞 Phone: $phone\n" .
            "📧 Email: $email\n" .
            "📍 Location: $location\n" .
            "📦 Package: $package\n" .
            "📝 Notes: $notes"
        );

        // 🔁 REDIRECT TO WHATSAPP
        $waLink = "https://wa.me/254799174938?text=$msg";
header("Location: success.php?wa=" . urlencode($waLink));
exit();


    } else {
        echo "Database error: " . mysqli_error($conn);
    }
}
?>

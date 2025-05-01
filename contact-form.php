<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    $conn = new mysqli("localhost", "root", "", "my_database");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    $to = "speedies.pk@gmail.com"; // Change to your email
    $subject = "New Contact Form Submission";
    $email_message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: no-reply@yourwebsite.com";


    // $to = "speedies.pk@gmail.com";
    // $subject = "New Contact Form Submission";
    // $headers = "From: $email" . "\r\n" .
    //            "Reply-To: $email" . "\r\n" .
    //            "Content-Type: text/plain; charset=UTF-8";
    
    // $body = "Name: $name\n";
    // $body .= "Email: $email\n";
    // $body .= "Phone: $phone\n";
    // $body .= "Message:\n$message\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again later.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request!";
}
?>

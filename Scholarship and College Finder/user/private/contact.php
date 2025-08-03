<?php

	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	
	require_once '../../global/main_configuration.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize form data
        $name    = htmlspecialchars(trim($_POST["name"]));
        $email   = htmlspecialchars(trim($_POST["email"]));
        $subject = htmlspecialchars(trim($_POST["subject"]));
        $message = htmlspecialchars(trim($_POST["message"]));
        $receiver = "admin@gmail.com";

        // Validate
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format");
        }

        // Email settings
        $to      = $receiver; 
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $body = "
            <h2>New Contact Message </h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        // Send
        if (mail($to, $subject, $body, $headers)) {
            $_SESSION['success'] = "We've Received Your Message!";
            header("Location: ../public/contact");
        } else {
            $_SESSION['fail'] = "No Email Were Sent Due To Error!";
            header("Location: ../public/contact");
        }
    }


?>
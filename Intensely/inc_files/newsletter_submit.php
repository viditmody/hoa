<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.	
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$owner_name = filter_var(trim($_POST["owner_name"]), FILTER_SANITIZE_STRING);
		$mrn = filter_var(trim($_POST["mrn"]), FILTER_SANITIZE_NUMBER_INT);
		$resident_type = filter_var(trim($_POST["resident_type"]), FILTER_SANITIZE_STRING);

        // Check that data was sent to the mailer.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "vickym.vidit@gmail.com";

        // Set the email subject.
        $subject = "New Newsletter subscription from $email";

        // Build the email content.
        $email_content = "Hello,\n";
		$email_content .= "I would like to subscribe to the monthly newletter.\n\n";
		$email_content .= "Please see below my details.\n\n";
		
		$email_content .= "Name: $owner_name\n\n";
		$email_content .= "MR#: $mrn\n\n";
		$email_content .= "Resident Type: $resident_type\n\n";
		$email_content .= "Email: $email\n\n";
		
        $email_content .= "Thank you\n\n";

        // Build the email headers.
        $email_headers = "From: $email";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "We have received your request. Thank You for subscribing to our newsletter.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
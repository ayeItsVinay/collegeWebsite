<?php 
$name = $_POST['name'];
$visitorEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailFrom = 'info@college-website-omega.vercel.app';

$emailSubject = 'New Form Submission';

$emailBody = "User Name: $name.\n".
                "User Email: $visitiorEmail.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

$to = "vinaayy399@gmail.com"

$headers = "From : $emailFrom \r\n";
$headers .= "Reply To : $visitorEmail \r\n";

mail($to,$emailSubject,$emailBody,$headers);

header("Location: contact.html")

?>

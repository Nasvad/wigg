<?php
session_start();

/*if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}*/

$name = strip_tags(htmlspecialchars($_POST['nome']));
$email = strip_tags(htmlspecialchars($_POST['email']));
//$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "info@example.com"; // Change this email to your //
$subject = "Assunto:  Dúvida de usuário";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nMessage: $message";
/*$header = "From: $email";
$header .= "Reply-To: $email";*/

if(!mail($to, $subject, $body)) http_response_code(500);
$_SESSION["email_enviado"] = true;

header("Location: ../fale_conosco.php");
?>



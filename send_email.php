<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Mettez ici votre adresse e-mail où vous souhaitez recevoir les messages
  $to = "votre@example.com";
  $subject = "Nouveau message depuis votre site web";
  $headers = "From: $email";
  
  // Envoi de l'e-mail
  if (mail($to, $subject, $message, $headers)) {
    header("Location: confirmation.html"); // Redirection vers une page de confirmation
  } else {
    echo "Désolé, une erreur s'est produite lors de l'envoi de votre message.";
  }
} else {
  // Redirection vers la page du formulaire si l'accès direct est tenté
  header("Location: index.html");
}
?>
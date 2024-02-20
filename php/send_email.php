<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pro@llayz.fr"; // Adresse e-mail de destination
    $subject = "Nouveau message de " . $_POST["name"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];
    
    // Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message.";
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $avis = $_POST['avis'];
    $evaluation = $_POST['evaluation'];

    $to = "cclassycloud@gmail.com";
    $subject = "Nouvel avis soumis";
    $message = "Un nouvel avis a été soumis :\n\nNom: $nom\nAvis: $avis\nÉvaluation: $evaluation";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Avis envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'avis.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>

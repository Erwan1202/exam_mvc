<?php
require_once 'models/Contact.php';

class ContactController {
    public function formulaire() {
        require 'views/contact.php';
    }

    public function enregistrer() {
        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact = new Contact($pdo);
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'message' => $_POST['message'],
            ];
            $contact->ajouterContact($data);
            header('Location: index.php?page=contact&success=1');
            exit();
        }
    }

    public function contact() {
        // Vérifie si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            
            // Envoi de l'email
            $to = "contact@smartbike.com"; // Adresse email de l'entreprise
            $subject = "Nouveau message de $prenom $nom";
            $body = "Message de $prenom $nom ($email):\n\n$message";
            $headers = "From: $email";
            
            if (mail($to, $subject, $body, $headers)) {
                echo "<p>Votre message a été envoyé avec succès !</p>";
            } else {
                echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
            }
        }

        // Inclure la vue du formulaire de contact
        require_once 'views/contact.php';
    }
}
?>

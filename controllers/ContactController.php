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
}
?>

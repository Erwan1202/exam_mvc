<?php
    require __DIR__ . '/../models/commandes.php';

class CommandeController {
    public function formulaire() {
        require 'views/commander.php';
    }

    public function enregistrer() {
        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $commande = new Commande($pdo);
            $data = [
                'id_velo' => $_POST['id_velo'],
                'nom_client' => $_POST['nom_client'],
                'prenom_client' => $_POST['prenom_client'],
                'email_client' => $_POST['email_client'],
                'message' => $_POST['message'],
            ];
            $commande->ajouterCommande($data);
            header('Location: index.php?page=velos&success=1');
            exit();
        }
    }
}
?>

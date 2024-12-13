<?php
require_once 'models/velo.php'; // Assurez-vous d'inclure le bon modèle pour récupérer les vélos

class CommandeController {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function formulaire() {
        // Récupérer tous les vélos pour le menu déroulant
        $velo = new Velo($this->pdo);
        $velos = $velo->getTousLesVelos(); // Récupère tous les vélos
        
        // Inclure la vue avec les vélos passés en paramètre
        require_once 'views/commander.php';
    }

    public function commander() {
        // Traiter le formulaire si soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les informations envoyées
            $velo_id = $_POST['velo'];
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Sauvegarder la commande dans la base de données
            $stmt = $this->pdo->prepare("INSERT INTO commandes (id_velo, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$velo_id, $nom, $prenom, $email, $message]);

            // Confirmation
            echo "<p>Commande envoyée avec succès ! Nous vous contacterons bientôt.</p>";
        }

        // Récupérer tous les vélos pour le menu déroulant
        $velo = new Velo($this->pdo);
        $velos = $velo->getTousLesVelos();

        // Inclure la vue de la commande avec les vélos passés en paramètre
        require_once 'views/commander.php';
    }
}
?>

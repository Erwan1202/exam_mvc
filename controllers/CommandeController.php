<?php
require_once 'models/velo.php'; 
require_once 'config/config.php';
class CommandeController {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function formulaire() {
        $velo = new Velo($this->pdo);
        $velos = $velo->getTousLesVelos();

        if ($velos) {
            require_once 'views/commander.php';
        } else {
            echo "<p>Aucun vélo trouvé dans la base de données.</p>";
        }
    }

    public function commander() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $velo_id = $_POST['velo'];
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $stmt = $this->pdo->prepare("INSERT INTO commandes (id_velo, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$velo_id, $nom, $prenom, $email, $message]);

            echo "<p>Commande envoyée avec succès ! Nous vous contacterons bientôt.</p>";
        }

        $velo = new Velo($this->pdo);
        $velos = $velo->getTousLesVelos();


        if ($velos) {

            require_once 'views/commander.php';
        } else {
            echo "<p>Aucun vélo trouvé dans la base de données.</p>";
        }
    }
}

?>

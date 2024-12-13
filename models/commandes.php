<?php
class Commande {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour ajouter une commande
    public function ajouterCommande($data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO commandes (id_velo, nom_client, prenom_client, email_client, message) 
            VALUES (:id_velo, :nom_client, :prenom_client, :email_client, :message)
        ");
        $stmt->execute($data);
    }

    // Méthode pour récupérer toutes les commandes
    public function getCommandes() {
        $stmt = $this->pdo->query("SELECT * FROM commandes ORDER BY date_commande DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Utilisation de FETCH_ASSOC pour des résultats sous forme de tableau associatif
    }

    // Une méthode plus générique pour enregistrer une commande, sans redondance
    public function enregistrerCommande($id_velo, $nom, $prenom, $email, $message) {
        // On prépare et on exécute la commande
        $stmt = $this->pdo->prepare("INSERT INTO commandes (id_velo, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$id_velo, $nom, $prenom, $email, $message]);
    }
}

?>

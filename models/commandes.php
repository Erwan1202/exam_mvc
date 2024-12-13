<?php
class Commande {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function ajouterCommande($data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO commandes (id_velo, nom_client, prenom_client, email_client, message) 
            VALUES (:id_velo, :nom_client, :prenom_client, :email_client, :message)
        ");
        $stmt->execute($data);
    }

    public function getCommandes() {
        $stmt = $this->pdo->query("SELECT * FROM commandes ORDER BY date_commande DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function enregistrerCommande($id_velo, $nom, $prenom, $email, $message) {
        $stmt = $this->pdo->prepare("INSERT INTO commandes (id_velo, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$id_velo, $nom, $prenom, $email, $message]);
    }
}

?>

<?php
class Contact {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function ajouterContact($data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO contacts (nom, prenom, email, message) 
            VALUES (:nom, :prenom, :email, :message)
        ");
        $stmt->execute($data);
    }

    public function getContacts() {
        $stmt = $this->pdo->query("SELECT * FROM contacts ORDER BY date_contact DESC");
        return $stmt->fetchAll();
    }
}
?>

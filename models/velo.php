<?php

class Velo {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour récupérer le dernier vélo ajouté
    public function getDernierVelo() {
        $stmt = $this->pdo->prepare("SELECT * FROM velos ORDER BY date_ajout DESC LIMIT 1");
        $stmt->execute();
        return $stmt->fetch();
    }

    // Méthode pour récupérer tous les vélos
    public function getTousLesVelos() {
        $stmt = $this->pdo->prepare("SELECT * FROM velos ORDER BY date_ajout DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>

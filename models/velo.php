<?php
class Velo {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getDernierVelo() {
        $stmt = $this->pdo->query("SELECT * FROM velos ORDER BY id_velo DESC LIMIT 1");
        return $stmt->fetch();
    }

    public function getTousLesVelos() {
        $stmt = $this->pdo->query("SELECT * FROM velos");
        return $stmt->fetchAll();
    }
}
?>

<?php
class Velo {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getDernierVelo() {
        $sql = "SELECT * FROM velos ORDER BY date_ajout DESC LIMIT 1";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch();
    }

    public function getTousLesVelos() {
        $sql = "SELECT * FROM velos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function getVeloParId($id) {
        $sql = "SELECT * FROM velos WHERE id_velo = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
?>

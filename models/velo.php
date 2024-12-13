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

    public function getVeloParId($id) {
        $sql = "SELECT * FROM velos WHERE id_velo = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();  // Remplacez fetAch() par fetch()
    }

    public function getTousLesVelos() {
        $stmt = $this->pdo->prepare("SELECT * FROM velos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }
}

?>

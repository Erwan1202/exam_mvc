<?php

class MainController {
    // Méthodes d'affichage des vues
    public function accueil() {
        $this->render('accueil');
    }

    public function catalogue() {
        $this->render('velos');
    }

    public function commander() {
        $this->render('commander');
    }

    public function contact() {
        $this->render('contacts');
    }

    public function notFound() {
        $this->render('404'); 
    }

    // Méthode de rendu des vues
    private function render($view, $data = []) {
        extract($data);  // Extrait les données pour les rendre accessibles dans la vue

        $viewFile = __DIR__ . '/../views/' . $view . '.php';  // Définir le chemin vers la vue

        // Vérifie si la vue existe avant de l'inclure
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Vue introuvable : " . $view;
        }
    }
}
?>

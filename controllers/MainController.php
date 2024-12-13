<?php

    
    class MainController{
        public function accueil(){
            $this -> render('accueil');
        }

        public function catalogue(){
            $this -> render('velos');
        }

        public function commander(){
            $this -> render('commander');
        }

        public function contact(){
            $this -> render('contacts');
        }

        public function notFound(){
        $this->render('404'); 
        }

        private function render($view, $data = [])
{

    extract($data);

    $viewFile = __DIR__ . '/../views/' . $view . '.php';

    if (file_exists($viewFile)) {
        require_once $viewFile;
    } else {

    }
}

    }

?>
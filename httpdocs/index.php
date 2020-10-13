<?php

// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|ttf|woff|woff2|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // Liefere die angefragte Ressource direkt aus
}

include '../app/autoload.php';

$router = new class() {

    private $Page;

    public function Execute() {
        $this->setPage();
        $this->RenderPage();
    }

    private function setPage() {
        $this->Page = 'FrontPage';
    }

    private function RenderPage() {
        $p = $this->Page;
        $r = new $p();
        echo $r->Render();
    }

};

$router->Execute();
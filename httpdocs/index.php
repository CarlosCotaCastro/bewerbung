<?php

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
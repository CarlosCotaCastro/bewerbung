<?php

include '../app/autoload.php';

$router = new class() {

    private $Page;

    public function Execute() {
        try {
            $this->setPage();
            $this->RenderPage();
        } catch (Exception $ex) {
            return false;
        }
    }

    private function setPage() {
        $url = $_SERVER['REQUEST_URI'];
        
        $pages = [
            '/' => 'FrontPage',
            '/projects/tabac-benden' => 'TabacBendenPage',
            '/projects/x-tm' => 'XTMPage',
            '/projects/web-store' => 'WebStorePage',
            '/projects/rb-online' => 'RBOnlinePage',
        ];
        
        if (array_key_exists($url, $pages)) {
            $this->Page = $pages[$url];
        } else {
            throw new Exception('Url not found');
        }
        
    }

    private function RenderPage() {
        $p = $this->Page;
        $r = new $p();
        echo $r->Render();
    }

};

$router->Execute();
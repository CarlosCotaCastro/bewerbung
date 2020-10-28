<?php

abstract class Page {

    abstract protected function RenderContent() : string;
    abstract protected function getTitle() : string;
    abstract protected function getMetaDescription() : string;

    public function Render() {
        return
            $this->RenderHead()
            . $this->RenderContent()
            . $this->RenderFooter()
        ;
    }

    private function RenderHead() : string {
        return
            '<html>'
            . '<head>'
                . '<title>'. $this->getTitle().'</title>'
                . '<link rel="stylesheet preload" href="/css/styles.css" type="text/css" />'
                . '<link rel="preload" href="/fonts/OpenSansCondensed-Light.woff2" as="font" />'
                . '<link rel="preload" href="/fonts/OpenSansCondensed-Bold.woff2" as="font" />'
                . '<meta name="viewport" content="width=device-width, initial-scale=1.0">'
                . $this->RenderAutoReloadSkript()
            . '</head>'
            . '<body>'
                . $this->RenderMenu()
                . '<div class="content">'
        ;
    }

    private function RenderMenu() : string {
        $r = new MenuRenderer();
        return $r->Render();
    }
    
    private function RenderFooter() : string {
        return
            '</div>'
            . '</body>'
            . '</html>'
        ;
    }

    public function RenderAutoReloadSkript() {
        return (EnviromentHelper::isDevelopment())
            ? '<script src="//localhost:35729/livereload.js"></script>'
            : ''
        ;
    }
    
     protected function RenderContainer(string $id, string $content) : string {
        return
            '<section id="'.$id.'">'
                . '<div class="wrapper">'
                    . '<div class="gutter">'
                    . $content
                 . '</div>'
                . '</div>'
            . '</section>'
        ;
    }

}
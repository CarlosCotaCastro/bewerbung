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
            '<html><head>'
            . '<title>'. $this->getTitle().'</title>'
                . '<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">'
                . '<link rel="stylesheet" href="/css/styles.css" type="text/css" />'
                . $this->RenderAutoReloadSkript()
            . '</head>'
            . '<body>'
                . '<div class="content">'
        ;
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

}
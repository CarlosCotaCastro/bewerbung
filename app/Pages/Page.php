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
                . '<link rel="stylesheet" href="/css/styles.css" type="text/css" />'
            . '</head>'
            . '<body>'
        ;
    }

    private function RenderFooter() : string {
        return
            '</body>'
            . '</html>'
        ;
    }
}
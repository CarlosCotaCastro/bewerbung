<?php

abstract class Project {

    abstract public function getThumbnailUrl() : string;
    abstract public function getName() : string;
    abstract public function getSlug() : string;
    abstract public function getAbstract() : string;
    
    public function RenderProjectPreview() {
        return
            '<a href="/projects/'.$this->getSlug().'">'
            . $this->RenderImage()
            . '<h3>'.$this->getName().'</h3>'
            . $this->RenderAbstract()
            . '</a>'
        ;        
    }
    
    private function RenderImage() : string {
        return '<img src="/img/projects/thumbs/'.$this->getThumbnailUrl().'">';
    }
    
    private function RenderAbstract() : string {
        return ($this->getAbstract() != '')
            ? 
                '<div class="abstract">'
                . $this->getAbstract()
                . '</div>'
            : ''
        ;
    }
    
}

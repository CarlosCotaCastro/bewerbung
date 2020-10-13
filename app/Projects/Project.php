<?php

abstract class Project {

    abstract public function getThumbnailHandle() : string;
    abstract public function getName() : string;
    abstract public function getSlug() : string;
    abstract public function getPosition() : string;
    
    // Yes i know that i could implement to return an timespan object, but that seams overkill for this small project.
    abstract public function getTimespan() : string; 
    
    public function RenderProjectPreview() {
        return
            '<li class="col-s-12 col-m-4 col-l-3 col-xl-3">'
            . '<div class="gutter">'
                . '<a href="/projects/'.$this->getSlug().'">'
                . $this->RenderImage()
                . '<div class="gutter">'
                    . '<h3>'.$this->getName().'</h3>'
                    . $this->RenderAbstract()
                    . '<p class="more">More Information</p>'
                . '</div>'
                . '</a>'
            . '</div>'
            . '</li>'
        ;        
    }
    
    private function RenderImage() : string {
        $path = '/img/projects/thumbs/';
        return
            '<picture>'
            . '<img src="'.$path.$this->getThumbnailHandle().'.png">'
            . '</picture>'
        ;
    }
    
    private function RenderAbstract() : string {
        return
            '<div class="abstract">'
            . $this->RenderTimespan()
            . $this->RenderPosition()
            . '</div>'
        ;
    }

    public function RenderTimespan() : string {
        return
            '<div class="timespan">'
            . $this->getTimespan()
            . '</div>'
        ;
    }

    public function RenderPosition() : string {
        return
            '<div class="position">'
            . 'Position: '
            . $this->getPosition()
            . '</div>'
        ;
    }

}

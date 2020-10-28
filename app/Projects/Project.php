<?php

abstract class Project {

    abstract public function getThumbnailHandle() : string;
    abstract public function getName() : string;
    abstract public function getSlug() : string;
    abstract public function getPosition() : string;
    abstract public function getBegin() : DateTime;
    abstract public function getEnd() : DateTime;
    
    public function RenderProjectPreview() {
        return
            '<li class="col-xl-3 col-l-3 col-m-6 col-s-12 ">'
            . '<div class="gutter">'
                . '<div class="employment">'
                //. '<a href="/projects/'.$this->getSlug().'">'
                . $this->RenderImage()
                . '<div class="gutter">'
                    . '<h3>'.$this->getName().'</h3>'
                    . $this->RenderAbstract()
                    //. '<p class="more">More Information</p>'
                . '</div>'
                //. '</a>'
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
    
    public function getTimespan(): string {
        $from = $this->getBegin();
        $to = $this->getEnd();
        return 
           $from->format('M Y')
           .' - '
           . $to->format('M Y')
        ;
    }

}

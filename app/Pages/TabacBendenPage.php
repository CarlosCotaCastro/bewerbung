<?php

class TabacBendenPage extends \Page {

    protected function RenderContent() : string {
        return
            $this->RenderIntroduction()
            . $this->RenderArchitecture()
        ;     
    }

    protected function getTitle() : string {
        return 'Working experience at Tabac Benden GmbH';
    }

    protected function getMetaDescription() : string {
        return 'I was the head of research and development at Tabac Benden in Düsseldorf. It was almost my dream job.';
    }

    private function RenderIntroduction() : string {
        return $this->RenderContainer(
                'tabac-benden-introduction',
            
                '<h1>Tabac Benden</h1>'
                . '<p>Tabac Benden is one of the biggest retailers of premium tobacco products in Europe.</p>'
                . '<p>'
                . 'After taking care of the main project for around 15 years I began in 2015 my new job as head '
                . 'of the new research and development department. My duty was to relaunch the unsuccessfull La Casa del Habano Franchise page and '
                . 'create a plattform that allowed to add new shops fast.'
                . '</p>'
        );
    }

    private function RenderArchitecture() : string {
        return $this->RenderContainer(
                'tabac-benden-architecture',
                '<h2>A whole new framework</h2>'
        );
    }

}
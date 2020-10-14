<?php

class FrontPage extends Page {

    protected function RenderContent(): string {
        return
                $this->RenderHeroBanner()
                . $this->RenderIntroduction()
                . $this->RenderExperience()
                . $this->RenderEducation()
        ;
    }

    private function RenderHeroBanner() : string {
        return
            '<div class="hero">'
                . '<div class="wrapper">'    
                    . '<div class="col-xl-6 col-l-6 col-m-6 col-s-12 vc">'
                        . '<h1>Hi! I am Carlos.</h1>'
                        . '<h2>I create <strong>successfull online shops</strong>!</h2>'
                        . '<h3>Get to know me better!</h3>'
                    .'</div>'
                .'</div>'
            .'</div>'
        ;
    }
    
    private function RenderIntroduction() {
        return $this->RenderContainer('Introduction',
            
            '<h2>Introduction</h2>'
            .'<div class="col-xl-6 col-l-6 col-m-6 col-s-12">'
            . '<p>I am an computer scientist that worked for more than 20 years on online shops. Since 2015 I was the head of the research and development department at Tabac Benden in Düsseldorf. '
                . 'In that function I created a multishop system, several brands and products and ultimatly a profit-making business for the company.'
            . '</p>'
            . '<p>Currently I am looking for a new business that I can help to grow with all my knowledge. '
                . 'Look around to get a detailed information about me an my past work.'
            . '</p>'
            . '<p>'
                . 'By the way: This website was also created to show a little bit of code to new employers. '
                . 'Check out '
                . '<a href="'.$github_url.'" rel="noopener">'
                . 'this projects github page'
                . '</a>.'
            . '</p>'
            . '</div>'
        );
    }
   

    private function RenderExperience(): string {
        $r = new ProjectsTeaserRenderer();
        return 
                '<section class="projects_teaser_container">'
                . '<div class="wrapper">'
                    . '<div class="gutter">'
                        . '<h2>Experience:</h2>'
                    . '</div>'
                    . $r->Render()
                . '</div>'
                . '</section>'
        ;
    }

    protected function getMetaDescription(): string {
        return 'My private page to showcase a little bit of what I programmed since 1999.';
    }

    protected function getTitle(): string {
        return 'Carlos Cota Castro - Portfolio';
    }

    private function RenderEducation() : string {
        $r = new EducationRenderer();
        return $this->RenderContainer( 'education', $r->Render() );
    }
    
   

}

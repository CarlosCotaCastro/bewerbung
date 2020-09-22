<?php

class FrontPage extends Page {

    protected function RenderContent(): string {
        return
                $this->RenderHeroBanner()
                . $this->RenderProfile()
                . $this->RenderProjects()
                . $this->RenderInterestsSkript()
        ;
    }

    private function RenderHeroBanner() : string {
        return
            '<div class="hero">'
                . '<div class="vc">'
                    . '<h1>Hi! I am Carlos.</h1>'
                    . '<h2>I like <span class="interests">programming</span>!</h2>'
                    . '<h3>Get to know me better!</h3>'
                .'</div>'
            .'</div>'
        ;
    }
    
    private function RenderProfile(): string {
        $github_url = 'https://github.com/CarlosCotaCastro/bewerbung';
        return
            '<div class="profile">'
                .'<div class="wrapper">'
                . '<h2>Introduction</h2>'
                . '<p>I am an computer scientist that worked for more than 20 years on online shops. Since 2015 I was head of research and development at Tabac Benden in Düsseldorf.'
                    . 'In that function I created a multi-user shopsystem, several brands and products and ultimatly a profit-making business for the company.'
                . '</p>'
                . '<p>Currently I am looking for a new business that I can help to grow with all my knowledge. '
                    . 'Look around to get a detailed information about me an my past work.'
                . '</p>'
                . '<p>'
                    . 'By the way: This website was also created to show a little bit of code to new employers. '
                    . 'Check out the projects github page: '
                    . '<a href="'.$github_url.'" rel="noopener">'
                    . $github_url
                    . '</a>'
                . '</p>'
                .'</div>'
            .'</div>'
        ;
    }

    private function RenderProjects(): string {
        $r = new ProjectsTeaserRenderer();
        return
                '<h2>Past Projects</h2>'
                . $r->Render()
        ;
    }

    protected function getMetaDescription(): string {
        return 'My private page to showcase a little bit of what I programmed since 1999.';
    }

    protected function getTitle(): string {
        return 'Carlos Cota Castro - Portfolio';
    }

    private function RenderInterestsSkript() : string {
        return '<script type="text/javascript" src="/js/interests.js"></script>';
    }

}

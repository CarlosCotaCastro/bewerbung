<?php

class FrontPage extends Page {

    protected function RenderContent(): string {
        return
                $this->RenderHeroBanner()
                . $this->RenderIntroduction()
                . $this->RenderExperience()
                . $this->RenderEducation()
                . $this->RenderHireMe()
        ;
    }

    private function RenderHeroBanner() : string {
        return
            '<div id="hero">'
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
        return $this->RenderContainer('introduction',
            
            '<h2>Introduction</h2>'
            .'<div class="col-xl-12 col-l-12 col-m-6 col-s-12">'
            . '<p>I am an computer scientist that worked for more than 20 years on online shops. Since 2015 I was the head of the research and development department at Tabac Benden in Düsseldorf. '
                . 'In that function I created a multishop system, several brands and products and ultimatly a profit-making business for the company.'
            . '</p>'
            . '<p>Currently I am looking for a new business that I can help to grow with all my knowledge. '
                . 'Look around to get a detailed information about me an my past work.'
            . '</p>'
                . $this->RenderGitHubParagraph()
            . '</div>'
            . $this->RenderSkills()
            . $this->RenderHobbies()
        );
    }
   
    private function RenderSkills() {
        $r = new SkillListRenderer();
        return $r->Render();
    }
    
    private function RenderHobbies() {
        return 
            '<div class="col-xl-12 col-l-12 col-m-6 col-s-12">'
                .'<h3>Hobbies</h3>'
                . 'In times without a pandemic: Football, road cycling, punk concerts, meeting with friends, Chaos Computer Club.'
            . '</div>'
        ;
    }

    private function RenderExperience(): string {
        $r = new ProjectsTeaserRenderer();
        return 
                '<section id="experience">'
                . '<div class="wrapper">'
                    . '<div class="gutter">'
                        . '<h2>Experience:</h2>'
                    . '</div>'
                    . $r->Render()
                . '</div>'
                . '</section>'
        ;
    }
    
    private function RenderEducation() : string {
        $json = file_get_contents(APP_DIR.'/data/degrees.json');
        $degrees = json_decode($json);
        $r = new EducationRenderer($degrees);
        return $this->RenderContainer( 'education', $r->Render() );
    }
    
    private function RenderHireMe() : string {
        $r = new ContactRenderer();
        return $this->RenderContainer('hire_me', 
                '<h2>Hire me!</h2>'
                . '<p>I am looking forward to hear from you!</p>'
                . $r->Render()
        );
    }

    protected function getMetaDescription(): string {
        return 'My private page to showcase a little bit of what I programmed since 1999.';
    }

    protected function getTitle(): string {
        return 'Carlos Cota Castro - Portfolio';
    }

    private function RenderGitHubParagraph() : string {
        return
            '<p>'
                . 'By the way: This website was also created to show a little bit of code to new employers. '
                . 'Check out '
                . '<a href="https://github.com/CarlosCotaCastro/bewerbung" rel="noopener">'
                . 'this projects github page'
                . '</a>.'
            . '</p>'
        ;
    }

}

<?php

class FrontPage extends Page {

    protected function RenderContent(): string {
        return
                '<h1>Carlos Cota Castro</h1>'
                . $this->RenderProfile()
                . $this->RenderProjects()
        ;
    }

    private function RenderProfile(): string {
        return
                '<h2>Profile</h2>'
                . '<p>I am an Computer Scientist that worked for more than 20 years on online-shops for various companys.</p>'
                . '<p>With my professional formation as salesman I learned the foundations of the domain knowledge, that are the base of why the projects </p>'
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

}

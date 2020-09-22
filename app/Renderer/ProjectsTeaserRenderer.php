<?php

class ProjectsTeaserRenderer {

    private $Projects = [];
    
    /*

        'Casabenden',
        'Pipe Republic',
        'Cigarren.de',
        'McTrek',
        'Cigarworld',
        'Concretewave',
        'Münz',
        'SportImport',
        'Felt',
        'Rockshox',
        'DieRasenmaeher',
        'Vamos24',
        'Bicycles.de',
        'RB-Online',     */

    function __construct() {
        $this->getProjectsFromPagesDirectory();
    }

    public function Render(): string {

        return '<ul class="projects">'
                . $this->RenderList()
                . '</ul>';
    }

    private function RenderList(): string {
        $ret = '';
        
        foreach ($this->Projects as $p) {
            $ret .= $this->RenderProject($p);
        }
        return $ret;
    }
    
        private function RenderProject(Project $p) {
            return 
                '<li>'
                . $p->RenderProjectPreview()
                . '</li>'
            ;
        }

    private function getProjectsFromPagesDirectory() {
        $this->Projects = [];
        $files = scandir('Projects/');
        foreach ($files as $file) {
            if (substr($file, 0, 1) != '.' && $file != 'Project.php') {
                $class = basename('Projects/'.$file, '.php');
                $this->Projects[] = new $class();
            }
        }
    }
}

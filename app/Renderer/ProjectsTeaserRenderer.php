<?php

class ProjectsTeaserRenderer {

    private $Projects = [];

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
                '<li class="col-s-6 col-m-4 col-l-3 col-xl-2">'
                . $p->RenderProjectPreview()
                . '</li>'
            ;
        }

    private function getProjectsFromPagesDirectory() {
        $this->Projects = [];
        $files = scandir(APP_DIR.'/Projects/');
        foreach ($files as $file) {
            if (substr($file, 0, 1) != '.' && $file != 'Project.php') {
                $class = basename('Projects/'.$file, '.php');
                $this->Projects[] = new $class();
            }
        }
    }
}

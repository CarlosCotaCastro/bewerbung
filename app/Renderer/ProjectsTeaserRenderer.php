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
            $ret .= $p->RenderProjectPreview();
        }
        return $ret;
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
        usort($this->Projects, ['ProjectsTeaserRenderer', 'CompareTime']);
    }
    
    public static function CompareTime($a, $b) {
        return ($b->getBegin() <=> $a->getBegin());
    }
}

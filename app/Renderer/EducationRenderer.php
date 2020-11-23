<?php

class EducationRenderer {

    private array $Degrees = [];
    
    function __construct(array $Degrees) {
        $this->Degrees = $Degrees;
    }
    
	public function Render() : string {
		return 
            $this->RenderHeadLine()
            . $this->RenderList()
        ;
	}

    private function RenderHeadLine() : string {
        return '<h2>Education</h2>';
    }
    
    private function RenderList() : string {
        $ret = '';
        foreach ($this->getDegrees() as $d) {
            $ret .= $this->RenderDegree($d);
        }
        return '<ul>'.$ret.'</ul>';
    }
    
    private function RenderDegree(stdClass $d) : string {
        return
            '<li>'
                . '<span class="date">' . $d->Date . '</span>'
                . '<h3>'.$d->Title.'</h3>'
                . '<p class="institution">'.$d->Institution.'</p>'
                . $this->RenderAchievements($d)
        . '</li>'
        ;
    }
    
    private function RenderAchievements(stdClass $d) {
        $ret = '';
        foreach ($d->SpecialAchievement as $a) {
            $ret .= '<li>'.$a.'</li>';
        }
        return ($ret == '')
            ? ''
            : '<ul class="achievements">'.$ret.'</ul>'
        ;
    }
    
    private function getDegreesFile(): string {
        return $this->DegreesFile;
    }
    
    function getDegrees(): array {
        return $this->Degrees;
    }

    function setDegrees(array $Degrees): void {
        $this->Degrees = $Degrees;
    }

}
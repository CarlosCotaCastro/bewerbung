<?php

class EducationRenderer {

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
    
    private function getDegrees() : array {
        $ret = [];
        
        $d = new stdClass();
        $d->Date = 'June 2013';
        $d->Title = 'Graduated with Bachelor in Computer Science';
        $d->Institution = 'Heinrich-Heine University Düsseldorf';
        $d->SpecialAchievement[] = '2nd place in the practical programming course of 2005.';
        $d->SpecialAchievement[] = 'Bachelor-Thesis: '. _ELink('Creation of an homework submission tool with PHP.', 'https://auas.cs.uni-duesseldorf.de/');
        $d->SpecialAchievement[] = 'Layouted the students newspaper.';
        $d->SpecialAchievement[] = 'Elected for students parliament for three years.';
        $d->SpecialAchievement[] = 'Worked in the unit of political education for the students representation.';
        $ret[] = $d;
        
        $d = new stdClass();
        $d->Date = 'July 2004';
        $d->Title = 'Graduation as computer science salesman';
        $d->Institution = 'Riemke und Bruser GbR and Walter-Eucken Berufskolleg';
        $d->SpecialAchievement = [];
        $ret[] = $d;
        
        $d = new stdClass();
        $d->Date = 'June 2002';
        $d->Title = 'Highschool graduation';
        $d->Institution = 'Gymnasium Vogelsang in Solingen';
        $d->SpecialAchievement = [];
        $ret[] = $d;
        
        return $ret;
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
}
<?php

class SkillListRenderer {

	public function Render() {
		return
            '<div class="col-xl-4 col-l-4 col-m-6 col-s-12">'
                .'<h3>Languages</h3>'
                . $this->RenderSkillList($this->getLanguages())
            . '</div>'
            . '<div class="col-xl-4 col-l-4 col-m-6 col-s-12">'
                .'<h3>Skills and concepts</h3>'
                . $this->RenderSkillList($this->getSkills())
            . '</div>'
            . '<div class="col-xl-4 col-l-4 col-m-6 col-s-12">'
                .'<h3>Tools</h3>'
                . $this->RenderSkillList($this->getTools())
            . '</div>'
        ;
	}
    
        private function RenderSkillList(array $list) : string {
            $ret = '';
            foreach ($list as $s) {
                $ret .= '<li>'.$this->replaceSkillLevelWithSmallTag($s).'</li>';
            }
            return '<ul>'.$ret.'</ul>';
        }
        
        private function replaceSkillLevelWithSmallTag(string $s) : string {
            $ret = str_replace('(', '<small>(', $s);
            return str_replace(')', ')</small>', $ret);
        }

    private function getSkills(): array {
        return [
            'Clean-Code',
            'object oriented programming',
            'domain driven development',
            'event driven development',
            'test driven development',
            'Database modelling',
            'web security (encryption, prevention of sql-injections and cross-site-skripting)',
            'extreme programming',
            'agile development',
            'resource management (aka concepts of operating systems)',
            'logistics',
            'image processing',
            'video-editing',
            'camera operating',
            'photography',
            'user interface design',
            'print design',
            'product design',
            'market-research',
            'UX (not limited to user interfaces, but rather to the whole shopping experience)',
            'statistics and analytics',
            'gamification',
            'search engine optimization',
            'information retrieval',
            'knowledge managment',
            'content marketing',
            'social-media marketing',
            'machine learning concepts'
        ];
    }

    private function getLanguages(): array {
        return [
            'PHP 7.4',
            'Javascript (mostly with jQuery, but moving towards vanila js)',
            'SQL',
            'HTML5',
            'CSS3',
            'Python (used for a small print-server)',
            'Java and C (used in Univerity)',
            'Perl (used in legacy-code until 2015)',
            'german (native)',
            'english (almost like a native)',
            'gallego (native)',
            'spanish (native)',
            'portugese (beginner)'
        ];
    }

    private function getTools(): array {
        return [
            'PHPStorm (prefered)',
            'My own php-generator skript',
            'PHPUnit',
            'MariaDB',
            'Elasticsearch',
            'nginx',
            'Git',
            'Stylus',
            'Linux (Ubuntu on Servers)',
            'MacOS (for Desktop)',
            'iTerm2',
            'Adobe Photoshop',
            'Adobe Premiere',
            'Adobe Illustrator',
            'Adobe XD',
            'Adobe Dimension',
            'Grunt',
            'Netbeans (for private use)',
            'PyCharm',
            'Ansible',
            'Vagrant',
            'Google Analytics',
            'Google Web-Console',
            'ffMPEG',
            'ImageMagick',
            'Keychron K2 mechanical keyboard with blue switches'
        ];
    }
}
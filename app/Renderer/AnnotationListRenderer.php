<?php

class AnnotationListRenderer {

    private $List = [];
    
    function __construct(array $List) {
        $this->List = $List;
    }

	public function Render() : string {
        
        if (count($this->List) < 1)
            return '';
        
		$ret = '';
        foreach ($this->List as $i => $text) {
            $ret .= $this->RenderItem($i + 1,$text);
        }
		return 
            '<div class="wrapper">'
            . '<ul class="annotation_list gutter">'
            . $ret
            . '</ul>'
            . '</div>'
        ;
	}
    
    private function RenderItem(int $index, string $text): string {
        return 
            '<li id="annotation'.$index.'">'
            . '<small>'
                . '<sup>['.$index.']</sup> '
                . $text
                . '</small>'
            . '</li>'
        ;
    }

}
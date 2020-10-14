<?php

class EducationRendererTest extends \PHPUnit\Framework\TestCase {
   
    public function testRenders() {
        $r = new EducationRenderer();
        $result = $r->Render();
        
        $this->assertNotEmpty($result);
    }
}
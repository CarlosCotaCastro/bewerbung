<?php

class TabacBendenProjectTest extends \PHPUnit\Framework\TestCase {
    
    public function testMethodsMatchAbstractClass() {
        $o = new TabacBendenProject();
        $this->assertNotEmpty($o->RenderProjectPreview());
    }
    
}
<?php

class ProjectsTeaserRendererTest extends \PHPUnit\Framework\TestCase {

    public function testRenders() {
        $r = new ProjectsTeaserRenderer();
        $this->assertNotEmpty($r->Render());
    }

}

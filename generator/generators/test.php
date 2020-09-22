<?php

class Test extends myClassGenerator implements iMyGenerator {

    public function getPath() {
        return $this->Path;
    }

    public function getPrefix() {
        return '';
    }

    public function getSuffix() {
        return 'Test';
    }

    public function ExtendsClass() {
        return 'PHPUnit\Framework\TestCase';
    }

    public function ImplementsInterface() {
        return '';
    }

    protected function getFileName() {
        return strtolower($this->getPrefix() . $this->ClassName) . $this->getSuffix();
    }

    protected function getNeededVarsString() : string {
        return '';
    }

}

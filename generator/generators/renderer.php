<?php

class Renderer extends myClassGenerator implements iMyGenerator {

    public function getPath() {
        return 'Renderer';
    }

    public function getPrefix() {
        return '';
    }

    public function getSuffix() {
        return 'Renderer';
    }

    public function ExtendsClass() {
        return '';
    }

    public function ImplementsInterface() {
        return '';
    }

    protected function getNeededVarsString() : string {
        return
                "\n\t" . 'public function Render() {'
                . "\n\t\t" . '$ret = \'\';'
                . "\n\t\t" . 'return $ret;'
                . "\n\t" . '}'
                . "\n\n"
        ;
    }

}

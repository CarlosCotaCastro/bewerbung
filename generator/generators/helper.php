<?php

class Helper extends myClassGenerator implements iMyGenerator {

    public function getPath() {
        return 'Helper';
    }

    public function getPrefix() {
        return '';
    }

    public function getSuffix() {
        return 'Helper';
    }

    public function ExtendsClass() {
        return '';
    }

    public function ImplementsInterface() {
        return '';
    }

    protected function getNeededVarsString() : string {
        return  "\n\n";
    }

}

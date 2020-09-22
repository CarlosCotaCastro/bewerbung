<?php

class Project extends myClassGenerator implements iMyGenerator {

    public function getPath() {
        return 'Projects';
    }

    public function getPrefix() {
        return '';
    }

    public function getSuffix() {
        return 'Project';
    }

    public function ExtendsClass() {
        return 'Project';
    }

    public function ImplementsInterface() {
        return '';
    }

    protected function getNeededVarsString() : string {
        return '';
    }

}

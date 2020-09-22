<?php

class Page extends myClassGenerator implements iMyGenerator {

    public function getPath() {
        return 'Pages';
    }

    public function getPrefix() {
        return '';
    }

    public function getSuffix() {
        return 'Page';
    }

    public function ExtendsClass() {
        return 'Page';
    }

    public function ImplementsInterface() {
        return '';
    }

    protected function getNeededVarsString() : string {
        return <<<EOL

    protected function RenderContent() : string {
        return '';      // Implementation needed
    }

    protected function getTitle() : string {
        return '';      // Implementation needed
    }

    protected function getMetaDescription() : string {
        return '';      // Implementation needed
    }

EOL;
    }

}

<?php

class WebstoreProject extends \Project {
    

    public function getName(): string {
        return 'WS Web-Store GmbH';
    }

    public function getSlug(): string {
        return 'web-store';
    }

    public function getThumbnailHandle(): string {
        return 'web-store';
    }
    
    public function getPosition(): string {
        return 'Senior Developer';
    }

    public function getBegin(): \DateTime {
        return new DateTime('2012-07-01');
    }

    public function getEnd(): \DateTime {
        return new DateTime('2015-04-30');
    }

    
}
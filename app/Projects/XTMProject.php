<?php

class XTMProject extends \Project {
    

    public function getName(): string {
        return 'X-TM GmbH';
    }

    public function getSlug(): string {
        return 'x-tm';
    }

    public function getThumbnailHandle(): string {
        return 'stadionwelt';
    }
    
    public function getPosition(): string {
        return 'working student';
    }

    public function getBegin(): \DateTime {
        return new DateTime('2008-10-01');
    }

    public function getEnd(): \DateTime {
        return new DateTime('2009-03-31');
    }

}
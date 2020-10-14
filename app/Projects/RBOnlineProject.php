<?php

class RBOnlineProject extends \Project {
    
    public function getName(): string {
        return 'Riemke & Bruser GbR';
    }

    public function getPosition(): string {
        return 'From Junior to senior developer';
    }

    public function getSlug(): string {
        return '/rb-online';
    }

    public function getThumbnailHandle(): string {
        return 'bruegelmann';
    }

    public function getBegin(): DateTime {
        return new DateTime('1999-09-01');
    }

    public function getEnd(): DateTime {
        return new DateTime('2012-06-30');
    }
    
}
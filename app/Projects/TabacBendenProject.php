<?php

class TabacBendenProject extends \Project {
    

    public function getName(): string {
        return 'Tabac Benden GmbH';
    }

    public function getSlug(): string {
        return 'tabac-benden';
    }

    public function getThumbnailHandle(): string {
        return 'tabac-benden';
    }
    
    public function getPosition(): string {
        return 'Head of research and development';
    }

    public function getBegin(): \DateTime {
        return new DateTime('2015-05-01');
    }

    public function getEnd(): \DateTime {
        return new DateTime('2020-10-31');
    }
}
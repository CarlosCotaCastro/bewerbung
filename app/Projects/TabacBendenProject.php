<?php

class TabacBendenProject extends \Project {
    
    public function getAbstract(): string {
        return 'Mein letzter Arbeitgeber';
    }

    public function getName(): string {
        return 'Abteilung Forschung und Entwicklung Tabac Benden';
    }

    public function getSlug(): string {
        return 'tabac-benden';
    }

    public function getThumbnailUrl(): string {
        return 'tabac-benden.png';
    }

    
}
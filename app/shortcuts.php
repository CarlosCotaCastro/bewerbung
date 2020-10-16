<?php

/**
 * @abstract Use this for external links.
 */
function _ELink(string $label, string $url) : string {
    return
        '<a href="'.$url.'" target="_blank" class="external" rel="noopener">'
            .$label
        .'</a>'
    ;
}
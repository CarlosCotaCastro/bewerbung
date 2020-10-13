<?php

define('APP_DIR',__DIR__);

function MyAutoload($class) {

    if (substr($class, -4) == 'Page') {
        include 'Pages/' . $class . '.php';
    }

    if (substr($class, -8) == 'Renderer') {
        include 'Renderer/' . $class . '.php';
    }
    
    if (substr($class, -7) == 'Project') {
        include 'Projects/' . $class . '.php';
    }
    
    if (substr($class, -6) == 'Helper') {
        include 'Helper/' . $class . '.php';
    }
}

spl_autoload_register('MyAutoload');

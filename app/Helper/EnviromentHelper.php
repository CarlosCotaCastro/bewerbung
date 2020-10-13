<?php

class EnviromentHelper {

    public static function isDevelopment() : bool {
        return (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false);
    }

}
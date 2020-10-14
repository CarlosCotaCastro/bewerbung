<?php

class EnviromentHelper {

    public static function isDevelopment() : bool {
        return ($_SERVER['SERVER_NAME'] == 'localhost');
    }

}
<?php

class EnviromentHelperTest extends \PHPUnit\Framework\TestCase {
    
    public function testLocalhostIsDev() {
        $_SERVER['SERVER_NAME'] = 'localhost';
        $this->assertTrue(EnviromentHelper::isDevelopment());
    }
    
}
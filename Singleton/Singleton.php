<?php

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public function __wakeup()
    {

    }

    public function sayHi()
    {
        echo 'Hi';
    }
}

$singleton = Singleton::getInstance();

$singleton->sayHi();




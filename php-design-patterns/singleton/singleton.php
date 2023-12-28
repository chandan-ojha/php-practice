<?php

// Singleton pattern ensures that only one object of a particular class is ever created.
class Singleton
{
    private static $instances = [];

    private function __construct()
    {
    }

    public static function getInstance()
    {
        $class = get_called_class();

        if (!isset(static::$instances[$class])) {
            static::$instances[$class] = new static();
        }

        return static::$instances[$class];
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
    }
}

<?php

// registry pattern is a way to store objects in a global registry so that you can access them anywhere in your application

class Registry
{
    private static $items = [];

    public static function get($key)
    {
        return self::$items[$key];
    }

    public static function set($key, $value)
    {
        self::$items[$key] = $value;
    }
}

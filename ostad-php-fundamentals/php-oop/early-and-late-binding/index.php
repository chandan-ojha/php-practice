<?php

class Planet
{
    static function echoName()
    {
        // echo self::getName(); // Early static binding
        echo static::getName(); // Late static binding
    }

    static function getName()
    {
        return "Planet";
    }
}

class Earth extends Planet
{
    static function getName()
    {
        return "Earth";
    }
}


// Planet::echoName();

Earth::echoName();

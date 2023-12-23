
<?php

//static method overrides in child classes
//static scope

class A
{
    protected static $message = "Hi from";
    protected static $name;

    static function sayHi()
    {
        self::$name = "A";
        echo self::$message . " " . self::$name . "\n";
    }
}

class B extends A
{
    static function sayHi()
    {
        self::$name = "B";
        echo self::$message . " " . self::$name . "\n";
        parent::sayHi();
    }
}

B::sayHi();

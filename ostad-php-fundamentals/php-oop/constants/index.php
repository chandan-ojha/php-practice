<?php

// define('ok', 123);
// echo ok;

class MyClass
{
    const CITY = 'Dhaka';

    function sayHi()
    {
        // echo "Hi From " . self::CITY . PHP_EOL;
        echo "Hi From " . $this::CITY . PHP_EOL;
    }
}

$myClass = new MyClass();
$myClass->sayHi();

echo MyClass::CITY;

<?php

//Facade Pattern: Provides a simplified interface to a complex system of classes, library or framework.
class Sample
{
    public function greetings()
    {
        echo "Hello Facade!" . PHP_EOL;
    }

    public function bye()
    {
        echo "Bye Facade!" . PHP_EOL;
    }

    public function sum($a, $b)
    {
        echo "Sum: " . ($a + $b) . PHP_EOL;
    }
}

//Proxy Pattern: Provides a placeholder for another object to control access to it.
class SampleFacade
{
    public static function __callStatic($name, $arguments)
    {
        (new Sample())->{$name}(...$arguments);
    }
}

SampleFacade::greetings();
SampleFacade::bye();
SampleFacade::sum(75, 25);

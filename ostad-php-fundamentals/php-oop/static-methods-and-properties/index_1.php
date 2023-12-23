
<?php

//static methods and properties of classes

class MathCalculator
{
    private $number;
    static $name;

    static function fibonacci($n)
    {
        // self::$name = "Fibonacci";
        // self::doSomething();
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething()
    {
        echo "Doing something\n";
    }

    function factorial($n)
    {
        // $this->doSomething();
        self::$name = "Factorial";
        self::doSomething();
        echo "Calculating factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(5);

MathCalculator::fibonacci(5);
echo MathCalculator::$name;

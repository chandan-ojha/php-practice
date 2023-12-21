<?php

//Benefits of value objects
// 1. Avoid primitive obsession and redability
// 2. Helps with consistency
// 3. Immutable

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }
        $this->age = $age;
    }

    public function increment()
    {
        // $this->age += 1; // Mutability
        return new self($this->age + 1); // Immutability
    }

    public function get()
    {
        return $this->age;
    }
}

function register(string $name, Age $age)
{
    // ...
}

$age = new Age(35);
$age = $age->increment(); // Immutability
var_dump($age->get());

// $age = new Age(500);
// register('John Doe', $age);

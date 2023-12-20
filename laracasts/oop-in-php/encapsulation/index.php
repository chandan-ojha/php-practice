<?php
//Encapsulation => Enclose within a capsule

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'Software Developer';
    }

    public function favoriteTeam()
    {
    }

    private function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die and that is terrifying';
    }
}

// $method = new \ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
// $method->setAccessible(true);

// $person = new Person('Chandan');
// var_dump($method->invoke($person));

// $person = new Person('Chandan');
// $person->name = null;
// var_dump($person->name);

class TennisMatch
{
    protected $playerOne;

    public function score()
    {
    }

    public function playerOne()
    {
        return $this->playerOne;
    }

    protected function hasWinner()
    {
    }

    protected function hasAdvantage()
    {
    }

    protected function inDeuce()
    {
    }
}

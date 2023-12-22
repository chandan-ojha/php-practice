<?php

interface BaseAnimal
{
    public function isAlive();
    function canEat();
}

class Animal implements BaseAnimal
{
    public function isAlive()
    {
    }

    public function canEat()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
    function canWalk();
}

abstract class AbstractHuman implements BaseHuman
{
    abstract public function run();

    function eat()
    {
        echo "I am eating" . PHP_EOL;
    }
}

class Human extends AbstractHuman
{
    public function isAlive()
    {
    }

    function canEat()
    {
    }

    public function canTalk()
    {
    }

    public function canWalk()
    {
    }

    public function run()
    {
        echo "I am running";
    }
}

$cat = new Animal();
echo $cat instanceof BaseAnimal . PHP_EOL;

$human = new Human();
echo $human->run();

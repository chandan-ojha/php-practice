<?php

abstract class Shape
{
    abstract public function getArea();
    abstract public function getPerimeter();
}

class Rectangle extends Shape
{
    private $base, $height;

    public function __construct($base, $height)
    {
        $this->base   = $base;
        $this->height = $height;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->base * $this->height;
    }

    public function getPerimeter()
    {
        return 2 * ($this->base + $this->height);
    }
}

class Triangle extends Shape
{
    function getArea()
    {
    }

    public function  getPerimeter()
    {
    }
}

$rectangle = new Rectangle(10, 20);

echo $rectangle->getArea();

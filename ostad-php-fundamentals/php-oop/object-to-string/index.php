<?php

class Color
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function __toString()
    {
        return "The color is {$this->color}";
    }
}

$c = new Color('red');
echo $c;

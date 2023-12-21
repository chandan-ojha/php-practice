<?php

class Cordinates
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}


function distance(Cordinates $start, Cordinates $end)
{
    $dx = $start->x - $end->x;
    $dy = $start->y - $end->y;

    return sqrt($dx * $dx + $dy * $dy);
}

$start = new Cordinates(1, 2);
$end = new Cordinates(3, 4);

echo distance($start, $end);

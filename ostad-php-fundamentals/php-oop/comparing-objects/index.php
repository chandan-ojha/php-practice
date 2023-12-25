<?php

class Planet
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$e = new Planet('Earth');
$e1 = $e;
$e2 = new Planet('Earth');
$m = new Planet('Mars');

if ($e === $e2) {
    echo 'Similar planets';
} else {
    echo 'Not similar planets';
}

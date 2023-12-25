<?php
// include 'bike.php';
// include 'planet.php';
// include 'spaceship.php';

//before php 7.2
// function __autoload($name)
// {
//     if (!class_exists($name)) {
//         include $name . '.php';
//     }
// }

function autoload($name)
{
    if (strpos($name, 'Planet_') !== false) {
        $filename = strtolower(str_replace('Planet_', '', $name));
        include strtolower("planets/{$filename}.php");
    } else {
        include strtolower("{$name}.php");
    }
}

spl_autoload_register('autoload');


(new Bike)->getType();
// (new Planet)->getName();
(new Planet_Mars)->getName();
(new Spaceship)->launch();

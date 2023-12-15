<?php

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

$numbers = new Collection([
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10
]);

// die(var_dump($numbers));

// if ($numbers->contains(100)) {
//     die('it contains ten');
// }

// $lessThanOrEqualTo5 = $numbers->filter(function ($number) {
//     return $number <= 5;
// });

$lessThanOrEqualTo5 = $numbers->filter(fn ($number) => $number <= 5);

var_dump($lessThanOrEqualTo5);

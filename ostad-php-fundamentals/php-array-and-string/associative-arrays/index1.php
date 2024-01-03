<?php

$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits'     => 'orange, banana, apple',
    'drinks'     => 'water, coke, coffee',
];

// foreach ( $foods as $key => $value ) {
//     echo $key . ' = ' . $value . "\n";
// }

// $keys = array_keys( $foods );
// $n = count( $keys );

// for ( $i = 0; $i < $n; $i++ ) {
//     $key = $keys[$i];
//     echo $foods[$key] . "\n";
// }

// $values = array_values( $foods );
// $n = count( $values );

// for ( $i = 0; $i < $n; $i++ ) {
//     $value = $values[$i];
//     echo $value . "\n";
// }

// $foods['drinks'] = $foods['drinks'] . ', orange juice';
$foods['drinks'] .= ', orange juice';

echo $foods['drinks'];

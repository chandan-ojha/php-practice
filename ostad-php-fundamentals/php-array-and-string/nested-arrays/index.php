<?php

$foods = [
    'vegetables' => explode( ', ', 'brinjal, brocolli, carrot, capsicam' ),
    'fruits'     => explode( ', ', 'orange, banana, apple' ),
    'drinks'     => explode( ', ', 'water, milk' ),
];

// print_r( $foods );
array_push( $foods['drinks'], 'orange juice' );
// print_r( $foods );

echo $foods['vegetables'][0] . PHP_EOL;

$sample1 = [
    'test' => [
        'test-again' => [
            'a', 'b', 'c', 'd',
        ],
    ],
];

echo $sample1['test']['test-again'][2] . PHP_EOL;

$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444, [5, 6, 7, 8]],
];

// print_r( $sample2 );

echo $sample2[2][4][2] . PHP_EOL;

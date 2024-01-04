<?php

// Decluttering an array

$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

$random = array(
    'a' => 12,
    'b' => 45,
    'c' => 67,
    'd' => 89,
    'e' => 90,
    'f' => 23,
    12  => 24,
    'g' => 56,
);

$newFruits = array( "jackfruit", "tamarind", "pineapple" );

$someFruits = array_splice( $fruits, -5, 2, $newFruits );

print_r( $someFruits );
print_r( $fruits );
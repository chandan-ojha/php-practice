<?php

// Concatenating several arrays
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

// $newFruits1 = array_slice( $fruits, 0, 3 );
// $newFruits2 = array_slice( $fruits, 3, null, true );

// $newFruits = array_merge( $newFruits1, $newFruits2 );

// print_r( $newFruits1 );
// print_r( $newFruits2 );
// print_r( $newFruits );

// $newFruitsPlus = $newFruits1 + $newFruits2;

// print_r( $newFruitsPlus );

$a1 = array_slice( $random, 0, 2 );
$a2 = array_slice( $random, 4, null, true );

$a3 = array( "j" => 32, "k" => 35 );

// $randomData = array_splice( $random, 2, 2, $a3 );
$randomDataCorrectWay = $a1 + $a3 + $a2;
// print_r( $randomData );
print_r( $randomDataCorrectWay );
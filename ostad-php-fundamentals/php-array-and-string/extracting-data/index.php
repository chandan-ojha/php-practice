<?php

// Extracting some data from an array while keeping the original array intact

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

// $some_fruits = array_slice( $fruits, 2 );
// $some_fruits = array_slice( $fruits, 2, 2 );
// $some_fruits = array_slice( $fruits, 2, -1 ); // -1 means the last element
// $some_fruits = array_slice( $fruits, -4, 2 ); // -4 means the 4th element from the end
// $some_fruits = array_slice( $fruits, -5 );
// $some_fruits = array_slice( $fruits, -5, -1, true ); // true means keep the original keys
// print_r( $some_fruits );

// $randomData = array_slice( $random, 3, null, true ); // null means all the elements from the 3rd element to the end of the array
// $randomData = array_slice( $random, -4, 3, true );

$randomData = array_slice( $random, 1, -1, true );
print_r( $randomData );

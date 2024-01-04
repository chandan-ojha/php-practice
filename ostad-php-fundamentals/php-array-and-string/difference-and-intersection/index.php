<?php

// Difference and intersection of two indexed and associated arrays
$numbers1 = array( 1, 2, 3, 4, 5, 6, 7, 8, 9 );
$numbers2 = array( 2, 4, 6, 8, 10, 12, 14, 16, 18 );

$fruits1 = array(
    'a' => 'apple',
    'b' => 'banana',
    'o' => 'orange',
    'p' => 'plum',
    'd' => 'dates',
    'm' => 'mango',
    'j' => 'jackfruit',
);

$fruits2 = array(
    'a' => 'pineapple',
    'b' => 'banana',
    'o' => 'orange',
    'g' => 'grapes',
    'd' => 'dates',
    'm' => 'mango',
    'z' => 'jackfruit',
);

echo "Intersection of two  arrays: \n\n";

$common_numbers = array_intersect( $numbers1, $numbers2 );
print_r( $common_numbers );

echo PHP_EOL;

// $common_fruits = array_intersect( $fruits1, $fruits2 );
$common_fruits = array_intersect_assoc( $fruits1, $fruits2 ); // array_intersect_assoc() is used for associated array comparison with value and key
print_r( $common_fruits );

echo "\n\n";

echo "Difference of two arrays: \n\n";

$diff_numbers = array_diff( $numbers1, $numbers2 );
print_r( $diff_numbers );

echo PHP_EOL;

// $diff_fruits = array_diff( $fruits2, $fruits1 );
$diff_fruits = array_diff_assoc( $fruits2, $fruits1 );

print_r( $diff_fruits );
<?php

$fruits = array(
    'a' => 'apple',
    'b' => 'banana',
    'o' => 'orange',
    'p' => 'plum',
    'd' => 'dates',
    'm' => 'mango',
    'z' => 'jackfruit',
);

$random = array( "apple", "Banana", "Apple", "banana" );

// sort( $fruits );
// asort( $fruits );
// ksort( $fruits ); //ksort() function sorts by key in ascending order
// krsort( $fruits ); //krsort() function sorts by key in descending order
// print_r( $fruits );

// sort( $random ); //case sensitive sorting
sort( $random, SORT_STRING | SORT_FLAG_CASE ); //case insensitive sorting

print_r( $random );

echo PHP_EOL;

// foreach ( $fruits as $fruit ) {
//     echo $fruit . "\n";
// }

$numbers = array( 1, 3, 11, 2, 8, 5 );

// sort( $numbers ); //sort() function sorts in ascending order and no key is preserved
// rsort( $numbers ); //rsort() function sorts in descending order and no key is preserved
// asort( $numbers ); //asort() function sorts in ascending order and key is preserved
// arsort( $numbers ); //arsort() function sorts in descending order and key is preserved
// sort( $numbers, SORT_STRING ); //SORT_STRING - compare items as strings
// print_r( $numbers );
// echo PHP_EOL;

// for ( $i = 0; $i < count( $numbers ); $i++ ) {
//     echo $numbers[$i] . "\n";
// }

// foreach ( $numbers as $number ) {
//     echo $number . "\n";
// }

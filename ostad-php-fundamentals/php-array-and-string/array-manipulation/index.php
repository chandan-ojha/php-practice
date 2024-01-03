<?php

$students = [
    "Chandan",
    "Rayhan",
    "Rahim",
    "Karim",
    "Jabbar",
    "Tamim",
];

// $student = array_pop( $students ); // remove last element
// $student = array_shift( $students ); // remove first element
// $student = array_unshift( $students, "Mahafuj" ); // add element at first
// $student = array_push( $students, "Akash" ); // add element at last
$students[] = "Foysal"; // add element at last

$n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}
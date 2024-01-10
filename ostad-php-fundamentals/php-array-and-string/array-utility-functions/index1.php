<?php

$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 );

function square( $n ) {
    printf( "Square of %d is %d\n", $n, $n * $n );
}

function cube( $n ) {
    return $n * $n * $n;
}

function even( $n ) {
    return $n % 2 == 0;
}

function odd( $n ) {
    return $n % 2 == 1;
}

// array_walk( $numbers, 'square' );

// $newArray = array_map( 'cube', $numbers );

$evenNumbers = array_filter( $numbers, 'even' );
$oddNumbers = array_filter( $numbers, 'odd' );

print_r( $evenNumbers );
print_r( $oddNumbers );

$persons = array( "Rahim", "Karim", "Rafiq", "Jabbar", "Salam", "Kalam" );

function filterByK( $name ) {
    return $name[0] == "K";
}

$newPersons = array_filter( $persons, 'filterByK' );

print_r( $newPersons );

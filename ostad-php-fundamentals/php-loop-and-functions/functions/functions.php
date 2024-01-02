<?php

function factorial( $n ) {
    if ( gettype( $n ) != "integer" ) {
        return "invalid";
    }

    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}

function serve( $foodType, $numberOfItems = "1 cup" ) {
    echo "{$numberOfItems} of {$foodType} have been served.\n\n";
}

function sum( int $x, int $y, int...$nums ): int {
    $result = $x + $y;
    for ( $i = 0; $i < count( $nums ); $i++ ) {
        $result += $nums[$i];
    }
    return $result;
}

//recursive function and recursion
function printNumber( $counter, $end, $stepping = 1 ) {
    if ( $counter > $end ) {
        return;
    }
    echo $counter . "\n";
    $counter += $stepping;
    printNumber( $counter, $end, $stepping );
}

//fibonacci series solved by recursion

function fibonacci( $old, $new, $end ) {
    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }
    $start++;

    echo $old . "\n";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci( $old, $new, $end );
}

//static variable
function doSomething() {
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i . "\n";
}
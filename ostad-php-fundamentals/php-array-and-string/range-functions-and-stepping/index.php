<?php

// $numbers = array();

// for ( $i = 0; $i <= 21; $i++ ) {
//     array_push( $numbers, $i );
// }

// print_r( $numbers );

foreach ( range( 0, 60, 11 ) as $number ) {
    if ( $number > 0 ) {
        echo $number . PHP_EOL;
    }
}
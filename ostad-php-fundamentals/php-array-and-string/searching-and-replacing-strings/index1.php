<?php

$string = "Quick Brown brown fox jumps over the lazy dog";
// echo strpos( $string, "brown", 11 ) . PHP_EOL; //strpos is case sensitive
echo strrpos( $string, "Brown" ) . PHP_EOL;

$offset = strpos( $string, "Quick" );

if ( $offset !== false ) {
    echo "Word was found" . PHP_EOL;
} else {
    echo "Word was not found" . PHP_EOL;
}

// echo stripos( $string, "Brown" ) . PHP_EOL; //stripos is case insensitive

echo strripos( $string, "Brown" ) . PHP_EOL;
<?php

$string = "Hello World";

$length = strlen( $string );

echo substr( $string, $length - 3 );

echo PHP_EOL;

echo substr( $string, -3, 2 );
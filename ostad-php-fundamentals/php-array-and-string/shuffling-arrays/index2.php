<?php

$fruits = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'dates' );

$_fruits = $fruits;
shuffle( $_fruits );

print_r( $_fruits );
echo PHP_EOL;

$key = array_rand( $fruits );
echo $key . ' => ' . $fruits[$key];

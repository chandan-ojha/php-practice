<?php
echo "String to Array : \n\n";

// $vegetables = explode( ', ', 'brinjal, brocolli, carrot, capsicam,potato, sweet-potato' );

// Pass Multiple Delimiters
$vegetables = preg_split( '/(, |,)/', 'brinjal, brocolli, carrot, capsicam,potato, sweet-potato,onion,ginger' );

print_r( $vegetables );

echo PHP_EOL;

echo "Array  to String : \n\n";

$vegetables_string = join( ', ', $vegetables );

echo $vegetables_string;

echo PHP_EOL;
echo PHP_EOL;

echo "Count : \n";
echo count( $vegetables );
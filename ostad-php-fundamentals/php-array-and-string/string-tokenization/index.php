<?php

$string = "Hello World,World how are you?";
$parts = explode( " ", $string );
print_r( $parts );

echo PHP_EOL;

$original = implode( " ", $parts );
echo $original;

echo PHP_EOL;
echo PHP_EOL;

$parts2 = str_split( $string );
print_r( $parts2 );

echo PHP_EOL;

//count the number of characters repeated above this string
echo "Character count \n\n";

/*$chars = array();

foreach ( $parts2 as $part ) {
if ( !isset( $chars[$part] ) ) {
$chars[$part] = 0;
}
$chars[$part]++;
}*/

$chars = array_count_values( $parts2 );

print_r( $chars );

echo PHP_EOL;
echo PHP_EOL;

//string tokenization by multiple delimiters
$parts3 = strtok( $string, " ," );

while ( $parts3 !== false ) {
    echo $parts3 . PHP_EOL;
    $parts3 = strtok( " ," );
}

echo PHP_EOL;
echo PHP_EOL;

$parts4 = preg_split( "/ |,/", $string );
print_r( $parts4 );

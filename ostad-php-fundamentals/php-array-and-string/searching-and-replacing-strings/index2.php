<?php

$string = "Quick brown Brown fox FOX jumps over the lazy dog";
// $replacedString = str_replace( "brown", "Brown", $string );
// $replacedString = str_ireplace( "brown", "red", $string );
// $replacedString = str_ireplace( "brown", "red", $string, $count );
// echo $replacedString . "\n";

// $string = str_replace( array( "brown", "fox", "dog" ), array( "red", "cat", "monkey" ), $string, $count );
// $string = str_ireplace( array( "brown", "fox", "dog" ), array( "red", "cat", "hen" ), $string, $count );
$string = str_ireplace( array( "brown", "fox", "dog" ), 'word', $string, $count );

echo $string . "\n";
echo "Total Replacements: " . $count . "\n";

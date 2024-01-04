<?php

$fruits = array(
    'a' => 'apple',
    'b' => 'banana',
    'o' => 'orange',
    'p' => 'plum',
    'd' => 'dates',
    'm' => 'mango',
    'z' => 'jackfruit',
);

$numbers = array( 1, 3, '11', 2, 8, 5, 4 );

// if ( in_array( 11, $numbers, true ) ) {
//     echo "Number is found\n";
// } else {
//     echo "Not found\n";
// }

// $offset = array_search( 3, $numbers, true );
// echo "Offset: {$offset}\n";

if ( key_exists( 'a', $fruits ) ) {
    echo "Key is found\n";
} else {
    echo "Not found\n";
}

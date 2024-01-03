<?php

$person = array(
    'fname' => 'Chandan',
    'lname' => 'Ojha',
);

$newPerson = $person; // Copy by Value (deep copy)

// $newPerson = &$person; // Copy by Reference (shallow copy)

// $newPerson['lname'] = 'Biswas';

// print_r( $person );
// print_r( $newPerson );

function printData( &$person ) {
    $person['fname'] .= ' Changed';
    print_r( $person );
}

printData( $person );
print_r( $person );
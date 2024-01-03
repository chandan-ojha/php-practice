<?php

// Removing data from associative arrays

$person = array(
    'fname' => 'Chandan',
    'lname' => 'Ojha',
);

print_r( $person );

unset( $person['lname'] );

print_r( $person );
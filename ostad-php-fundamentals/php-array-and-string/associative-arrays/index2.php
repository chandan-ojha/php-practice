<?php

// Associative Array to String Conversion - Serialize, json

$student = array(
    'fname'   => 'Jhon',
    'lname'   => 'Doe',
    'age'     => 20,
    'class'   => 10,
    'section' => 'A',
);

// echo $student['fname'] . ' ' . $student['lname'];
// printf( "%s %s\n", $student['fname'], $student['lname'] );

echo "---Serialized Data---\n\n";

$serialized = serialize( $student );

echo $serialized . "\n\n";

echo "---Unserialized Data---\n\n";

$newStudent = unserialize( $serialized );

print_r( $newStudent );

echo PHP_EOL;

echo "---JSON Data---\n\n";

$jsonData = json_encode( $student );

echo $jsonData . "\n\n";

echo "---JSON Decoded Data---\n\n";

$jsonDecoded = json_decode( $jsonData, true );

print_r( $jsonDecoded );

<?php

$name = "Chandan Ojha 1234567890 chandan@gmail.com";
$parts = sscanf( $name, "%s %s %10s %s" );

print_r( $parts );

echo PHP_EOL;

sscanf( $name, "%s %s %10s %s", $fname, $lname, $mobile, $email );

echo $fname . PHP_EOL;
echo $email . PHP_EOL;

echo PHP_EOL;

$hexColor = "#FF2F44";
sscanf( $hexColor, "#%2x%2x%2x", $red, $green, $blue );

echo $red . PHP_EOL;
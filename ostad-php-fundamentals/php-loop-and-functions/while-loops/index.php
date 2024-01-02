<?php

$i = 0;
while ( $i < 5 ) {
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo ( "-------\n" );

$j = 0;
while ( $j++ < 5 ) { // post-increment
    echo $j;
    echo PHP_EOL;
}

echo ( "-------\n" );

$k = 0;
while ( ++$k < 5 ) { // pre-increment
    echo $k;
    echo PHP_EOL;
}
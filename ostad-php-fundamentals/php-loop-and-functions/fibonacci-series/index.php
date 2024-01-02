<?php

$veryold = 0;
$old = 1;
$new = 1;

for ( $i = 0; $i < 10; $i++ ) {
    echo $veryold . ' ';
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}

//step by step process

/*
initially
$veryold = 0;
$old = 1;
$new = 1;

1st iteration
$veryold = 1;
$old = 1;
$new = 2;

2nd iteration
$veryold = 1;
$old = 2;
$new = 3;

3rd iteration
$veryold = 2;
$old = 3;
$new = 5;

4th iteration
$veryold = 3;
$old = 5;
$new = 8;

.....continue

 */

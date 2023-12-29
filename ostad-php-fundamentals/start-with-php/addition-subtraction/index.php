<?php

$a = 7;
$b = $a++;

echo $b, "\n", $a, "\n\n";

/*
$b = $a++
$b =  $a
$a = $a + 1;
*/

$n = 7;
$m = ++$n;

echo $m, "\n", $n;

/*
$m = ++$n;
$n = $n + 1;
$m = $n; 
*/

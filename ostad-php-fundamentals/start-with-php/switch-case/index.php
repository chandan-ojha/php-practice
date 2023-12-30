<?php

$n = -13;
$r = abs($n) % 2;

switch ($r) {
    case 0:
        switch ($n) {
            case $n > 0:
                echo "$n is a positive even Number";
                break;
            case $n < 0:
                echo "$n is a negative even Number";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "$n is a positive odd Number";
                break;
            case $n < 0:
                echo "$n is a negative odd Number";
                break;
        }
        break;
}
echo "\n";

//shortcut 
switch (true) {
    case ($r == 0 && $n > 0):
        echo "$n is a positive even Number";
        break;
    case ($r == 0 && $n < 0):
        echo "$n is a negative even Number";
        break;
    case ($r == 1 && $n > 0):
        echo "$n is a positive odd Number";
        break;
    case ($r == 1 && $n < 0):
        echo "$n is a negative odd Number";
        break;
}

echo "\n\n";


$string = "8balls";

switch ($string) {
    case (string) "9balls":
        echo "Nine balls";
        break;
    case (string) 8:
        echo "8";
        break;
    case (string) "8balls":
        echo "Eight balls";
        break;
}

echo "\n";

<?php

//1 - Divisible by 4 ?
//2 - Divisible by 100 ?
//3 - Divisible by 400 ?

$year = 1900;

//large code but readable
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year\n";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year\n";
} else if ($year % 4 == 0) {
    echo "{$year} is a leap year\n";
} else {
    echo "{$year} is not a leap year\n";
}

//short code but not readable
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year\n";
} else {
    echo "{$year} is not a leap year\n";
}

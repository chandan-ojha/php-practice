<?php

$fname = "Chandan";
$lname = "Ojha";
$middlename = "Nothing";

printf('My name is %3$s %1$s %2$s', $fname, $middlename, $lname);
echo "\n";

printf('The binary equivalent of %1$d is %1$b', 12);
echo "\n";

$n = 45.126;
printf("%.2f", $n);
echo "\n";

$a = 123.3253; //0123.3253
$b = 27.155; //0027.155

printf("%07.2f", $a);
echo "\n";
printf("%07.2f", $b);

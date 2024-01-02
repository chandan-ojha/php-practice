<?php

include_once 'functions.php';

echo "---factorial---\n";

$x = "abcd";
echo "The factorial of $x is " . factorial( $x ) . ".\n\n";

echo "--function default value--\n";

$ft = "Coffee";
$n = "4 cups";

serve( $ft, $n );

echo "--Acepting unlimited arguments--\n";

echo "Sum = " . sum( 1, 2, 3 ) . "\n\n";

echo "--Recursive function--\n";

printNumber( 1, 10, 2 );

echo "--Fibonacci series--\n";

fibonacci( 0, 1, 10 );

echo "--Static Scope--\n";

doSomething();
doSomething();
doSomething();

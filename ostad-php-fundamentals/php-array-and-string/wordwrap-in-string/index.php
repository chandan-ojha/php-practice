<?php

$string = "Lorem ipsum dolor sit amet, consectetur adipiscingggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg elit. Sed non risus. Suspendisse";

// echo wordwrap( $string, 26 );
echo wordwrap( $string, 26, "\n", true );
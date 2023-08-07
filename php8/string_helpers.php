<?php

#str_starts_with

/*$id = 'ch_1H9z4n2eZvKYlo2C';

//$result = stripos($id, 'ch_') === 0;

//php-8
$result = str_starts_with($id, 'ch_');

var_dump($result); // true*/

#######str_ends_with

$id = 'inv_1H9z4n2eZvKYlo2C_ch';
/*$result = stripos(strrev($id),strrev('_ch')) === 0;*/
/*var_dump(!! preg_match('/_ch$/', $id));*/

/*$result = str_ends_with($id, '_ch');
var_dump($result);*/

#str_contains
$url = 'https://example.com?foo=bar';
//var_dump(parse_url($url)['query']);

//$result = stripos($url, '?') !== false;
$result = str_contains($url, '?');
var_dump($result);
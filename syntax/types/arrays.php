<?php
$array1 = array(
    'foo' => 'bar',
    'bar' => 'foo'
);

// associative arrays?
$array2 = [
    'foo' => 'bar',
    'bar' => 'foo',
];

var_dump($array1, $array2);

// type casting
$array = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
);

var_dump($array);

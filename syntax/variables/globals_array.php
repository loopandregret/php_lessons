<?php
// the $GLOBALS array
// $GLOBALS is an associative array
// an associative array behaves like an object, or is an object. [] in php, {} in ts.
// ['a' => 'item_a'] in php, {'a': 'item_a'} in ts

$a = 1;
$b = 2;

function sum() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

sum();
echo "Output: {$b}\n";

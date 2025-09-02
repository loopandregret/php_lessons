<?php

// value only
$array = [1, 2, 3, 17, 25];

foreach($array as $value) {
    echo "Current element of \$array: $value.\n";
}

// key and value
$array = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17,
    "twenty-five" => 25,
];

foreach($array as $key => $value) {
    echo "Key: $key => Value: $value\n";
}

// mutli-dimensional key-value arrays
$grid = [];
$grid[0][0] = "a";
$grid[0][1] = "b";
$grid[1][0] = "c";
$grid[1][1] = "d";

foreach($grid as $y => $row) {
    foreach($row as $x => $value) {
        echo "Value at position x=$x and y=$y: $value\n";
    }
}


// dynamic arrays
foreach(range(1, 5) as $value) {
    echo "$value\n";
}

$array = [
    [1, 2],
    [3, 4],
];

foreach($array as [$a, $b]) {
    echo "A: $a; B: $b\n";
}

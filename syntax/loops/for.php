<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

echo "\n";

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

echo "\n";

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

echo "\n";

// iterating an array

$people = [
    ['name' => 'Kalle', 'salt' => 856412],
    ['name' => 'Pierre', 'salt' => 215863]
];

$size = count($people);

for ($i = 0; $i < $size; $i++) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}

echo json_encode($people) . "\n";

<?php

function rotate_2d_matrix($matrix) {
    $n = count($matrix);

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            $temp = $matrix[$i][$j];
            $matrix[$i][$j] = $matrix[$j][$i];
            $matrix[$j][$i] = $temp;
        }
    }

    for ($i = 0; $i < $n; $i++) {
        array_reverse($matrix[$i]);
    }

    return $matrix;
}

$rotated_matrix = rotate_2d_matrix([[0,1,0], [1, 2, 3], [6, 5, 4]]);

echo "Rotated Matrix: $rotated_matrix\n";

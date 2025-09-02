<?php

function pascal_triangle($n) {
    if ($n <= 0) {
        return [];
    }

    $triangle = [[1]];

    for ($row_idx = 1; $row_idx < $n; $row_idx++) {
        $new_row = [1];

        for ($col_idx = 1; $col_idx < $row_idx; $col_idx++) {
            $left_idx = $triangle[$row_idx - 1][$col_idx - 1];
            $right_idx = $triangle[$row_idx - 1][$col_idx];

            $sum = $left_idx + $right_idx;

            array_push($new_row, $sum);
        }

        array_push($new_row, 1);
        array_push($triangle, $new_row);
    }

    return $triangle;
}

print_r(pascal_triangle(6));
echo "\n";

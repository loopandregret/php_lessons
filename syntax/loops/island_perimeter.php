<?php

function island_perimeter($grid) {
    $perimeter = 0;
    $rows = count($grid);
    $cols = count($grid[0]);

    for ($row = 1; $row < $rows; $row++) {
        for ($col = 1; $col < $cols; $col++) {
            if ($grid[$row][$col] == 1) {
                $up = $grid[$row - 1][$col];
                $left = $grid[$row][$col - 1];

                $perimeter += 4;

                if ($row > 0 && $up == 1) {
                    $perimeter -= 2;
                }

                if ($col > 0 && $left == 1) {
                    $perimeter -= 2;
                }
            }
        }
    }

    return $perimeter;
}
$perimeter = island_perimeter([[0,0,0,0,0,0],[0,1,0,0,0,0],[0,1,0,0,0,0],[0,1,1,1,0,0],[0,0,0,0,0,0]]);

echo "Perimeter of given island: $perimeter\n";

<?php

$i = 1;
while ($i <= 10) {
    echo $i++;
}

echo "\n";

// another sytanx format
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

echo "\n";

<?php
$x = 10;

function test() {
    global $x;
    echo "{$x}\n";
}

test();

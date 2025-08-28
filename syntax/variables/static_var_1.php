<?php
function test() {
    static $count = 0;

    $count++;
    echo "{$count}\n";
    if ($count < 10) {
        test();
    }
    $count--;
}

test();

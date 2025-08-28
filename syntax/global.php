<?php
// the global keyword
$a = 1;
$b = 2;

function sum() {
    global $a, $b;

    $b = $a + $b;
}

sum();
echo "Variable 'a' is still {$a}\n";
echo "Variable 'b' is now {$b}\n";
?>

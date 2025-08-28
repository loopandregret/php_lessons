<?php
function exampleFunction($input) {
    $result = (static function () use ($input) {
        static $counter = 0;
        $counter++;
        return "Input: $input, Counter: $counter\n";
    });

    return $result();
}

// static variable 'counter' does not retain its value because it exists in an anonymous function
// hence, persists only within anon function's instance.
echo exampleFunction('A');
echo exampleFunction('B');
?>

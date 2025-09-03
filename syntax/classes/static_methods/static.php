<?php

class MathHelper {
    public static $pi = 3.14;

    public static function square($x) {
        return $x * $x;
    }
}

echo MathHelper::$pi;
echo "\n";
echo MathHelper::square(x: 5.5);
echo "\n";

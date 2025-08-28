<?php
class Foo {
    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }
}

class Bar extends Foo {}

var_dump(Foo::counter());
var_dump(Foo::counter());
var_dump(Bar::counter());
var_dump(Bar::counter());
echo Foo::counter() . "\n";
echo Bar::counter() . "\n";
?>

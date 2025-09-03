<?php
class A {
    public function __construct() {
        echo "Runs first when object is created.\n";
    }

    public function test() {
        return "Test __construct.\n";
    }
}

$a = new A();
echo $a->test();

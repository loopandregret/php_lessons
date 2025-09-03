<?php

class B {
    public function __destruct() {
        echo "Runs last after object creation.\n";
    }

    public function test() {
        return "Test __destruct.\n";
    }
}

$b = new B();
echo $b->test();

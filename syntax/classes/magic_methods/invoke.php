<?php

class Greeter {
    public function __invoke($name) {
        return "Hello, $name!\n";
    }
}

$g = new Greeter();

echo $g("Azara");

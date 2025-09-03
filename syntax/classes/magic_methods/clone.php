<?php

class C {
    public $x = 1;
    public function __clone() {
        $this->x = 99;
    }
}

$c = new C();
$z = clone $c;

echo "$z->x\n"; // cloned
echo "$c->x\n"; // original

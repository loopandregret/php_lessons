<?php

class User {
    private $data = [];

    public function __get($key) {
        return $this->data[$key] ?? null;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }
}

$u = new User();
$u->name = "Azara";

var_dump($u);

echo "$u->name\n";

<?php

class Doc {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function __tostring() {
        return "Document: {$this->name}\n";
    }
}

$f = new Doc("doc.pdf");

echo $f;

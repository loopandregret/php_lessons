<?php

class Smartfile {
    private $name;
    private $size;
    private $metadata = [];

    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }

    public function __tostring() {
        return "File: {$this->name} ({$this->size}KB)";
    }

    public function __get($key) {
        return $this->metadata[$key] ?? "Not Found.\n";
    }

    public function __set($key, $value) {
        $this->metadata[$key] = $value;
    }

    public function __invoke($action) {
        return "Performing '$action' on {$this->name}";
    }

    public function __clone() {
        $this->name = "Copy_of_$this->name";
    }
}

$file = new Smartfile("report.pdf", 250);

echo "$file\n";

$file->author = "Azara";
echo "Author: $file->author\n";

echo $file("open") . "\n";

$copy = clone $file;
echo "$copy\n";

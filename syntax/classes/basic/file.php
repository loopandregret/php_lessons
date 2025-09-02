<?php

class File {
    public $name;
    public $size;

    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }

    public function info() {
        return "File: {$this->name}, Size: {$this->size}KB\n";
    }
}

$file = new File("report.pdf", 20);
echo $file->info();

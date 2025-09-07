<?php
namespace App;

class FileManager {
    private $dir;

    public function __construct($dir) {
        $this->dir = $dir;

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    public function listFiles() {
        $files = array_diff(scandir($this->dir), ['.', '..']);
        return array_values($files);
    }

    public function createFile($name, $content = "") {
        if (!$name) {
            return "File name must be provided";
        }

        $path = "{$this->dir}/{$name}";
        file_put_contents($path, $content);
        return new SmartFile($name, filesize($path));
    }

    public function readFile($name) {
        $path = "{$this->dir}/{$name}";
        return file_exists($path) ? file_get_contents($path) : null;
    }

    public function deleteFile($name) {
        $path = "{$this->dir}/{$name}";
        return file_exists($path) ? unlink($path) : false;
    }
}

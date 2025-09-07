<?php
require __DIR__ . "/vendor/autoload.php";

use App\FileManager;

$manager = new FileManager(__DIR__ . "/storage");

$command = $argv[1] ?? null;
$arg1 = $argv[2] ?? null;
$arg2 = $argv[3] ?? null;

switch ($command) {
    case "list":
        print_r($manager->listFiles());
        break;

    case "create":
        $file = $manager->createFile($arg1, $arg2 ?? "");
        echo "Created: $file\n";
        break;

    case "read":
        echo $manager->readFile($arg1) . "\n";
        break;

    case "delete":
        $ok = $manager->deleteFile($arg1);
        echo $ok ? "Deleted $arg1\n" : "File not found\n";
        break;

    default:
        echo "Usage:\n";
        echo "      php index.php list                              -> To list files\n";
        echo "      php index.php create <filename> <content?>      -> To create a file with optional content\n";
        echo "      php index.php read <filename>                   -> To read contents of a file\n";
        echo "      php index.php delete <filename>                 -> To delete a file\n";
}

<?php

class Animal {
    public function speak() {
        return "Some generic sound\n";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Woof!\n";
    }
}

$d = new Dog();
echo $d->speak();

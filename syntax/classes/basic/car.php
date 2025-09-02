<?php

class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function drive() {
        return "The {$this->color} {$this->brand} is on the road.\n";
    }
}

$myCar = new Car("Lexus", "Black");
echo $myCar->drive();

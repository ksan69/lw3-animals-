<?php

namespace App;

class Cat extends Animal {
    protected string $color;


    public function __construct(
        string $name,
        int $age,
        string $color,
    ) {
        parent::__construct($name, $age, "cat");
        $this->color = $color;
    }

    public function makeSound(): string {
        return "Miyaau";
    }
}
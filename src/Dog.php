<?php

namespace App;

class Dog extends Animal {
    protected string $bread;


    public function __construct(
        string $name,
        int $age,
        string $bread
    ) {
        parent::__construct($name, $age, "dog");
        $this->bread = $bread;
    }

    public function makeSound(): string {
        return "Gav-gav";
    }
}
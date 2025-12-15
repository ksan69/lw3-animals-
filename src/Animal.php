<?php

namespace App;

abstract class Animal {
    public readonly string $name;
    public readonly int $age;
    public readonly string $species;


    public function __construct(
        string $name,
        int $age,
        string $species
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    /**
     * Animal default sound
     *
     * @return string
     */

    abstract public function makeSound(): string;
}
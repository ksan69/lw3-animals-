<?php

namespace App;

class Zoo {
    /**
     * @var Animal[]
     */
    protected $animals;

    public function __construct() {
        $this->animals = [];
    }

    /**
     * Add animal in zoo
     *
     * @param Animal $animal
     * @return void
     */
    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }


    public function listAnimals() {
        foreach ($this->animals as $animal) {
            echo "
Имя: {$animal->name}
Возраст: {$animal->age}
Вид: {$animal->species}
" . PHP_EOL;
        }
    }

    public function animalSounds() {
        foreach ($this->animals as $animal) {
            echo $animal->makeSound() . PHP_EOL;
        }
    }
}
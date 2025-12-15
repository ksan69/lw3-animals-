<?php
require "vendor/autoload.php";

use App\Cat;
use App\Dog;
use App\Zoo;


$cat1 = new Cat(
    "Вася",
    2.5,
    "white"
);
$cat2 = new Cat(
    "Кнопа",
    3,
    "gray"
);

$dog1 = new Dog(
    "Зефина",
    3,
    "Чихуахуа"
);
$dog2 = new Dog(
    "Кор",
    10,
    "Корги"
);

$zoo = new Zoo();
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);
$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);

$zoo->listAnimals();
$zoo->animalSounds();
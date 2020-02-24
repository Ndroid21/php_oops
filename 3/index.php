<?php
require "vendor/autoload.php";

use App\Car;

$car = new Car('WagonR', 5);

echo $car->getName();
echo $car->getGearCount();
echo $car->accelerate();
echo $car->applyBrake();
echo $car->accelerate();
<?php
require "vendor/autoload.php";

use App\Car;

$car = new Car('WagonR', 5);

echo "Name " . $car->getName() . "<br/>";
echo "Gears " . $car->getGearCount() . "<br/>";
echo "accelerate " . $car->accelerate() . "<br/>";
echo "apply brakes " . $car->applyBrake() . "<br/>";
echo "accelerate again " . $car->accelerate() . "<br/>";
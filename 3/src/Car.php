<?php
namespace App\Car;

use App\Vehicle;

class Car extends Vehicle
{
    public function __construct($name, $gears)
    {
        super($name, $gears);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGearCount()
    {
        return $this->gears;
    }
}
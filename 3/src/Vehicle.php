<?php
namespace App;

class Vehicle
{
    protected $name;
    protected $gears;

    public function __construct($name, $gears)
    {
        $this->name = $name;
        $this->gears = $gears;
    }

    public function accelerate()
    {
        return "move";
    }

    public function applyBrake()
    {
        return "apply brake";
    }
}
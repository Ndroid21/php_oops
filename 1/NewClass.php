<?php

class NewClass {
    private $firstName = 'John';
    private $lastName = 'Wick';

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$object = new NewClass;

var_dump($object);
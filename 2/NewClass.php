<?php

class NewClass {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

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

$obj1 = new NewClass('John', 'Wick');
echo $obj1->getFirstName() . "<br/>";
echo $obj1->getLastName() . "<br/>";
echo $obj1->getFullName() . "<br/>";

$obj2 = new NewClass('Xander', 'Cage');
echo $obj2->getFirstName() . "<br/>";
echo $obj2->getLastName() . "<br/>";
echo $obj2->getFullName() . "<br/>";
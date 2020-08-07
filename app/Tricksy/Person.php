<?php

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName() : string
    {
        return "{$this->firstName} {$this->lastName}";
        
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello {$person->fullName()}";
    }
}
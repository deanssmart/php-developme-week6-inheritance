<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Car 
{
    private $driver;
    private $passengers;
    private $occupants;

    public function __construct()
    {
        $this->occupants = collect();
    }

    public function setDriver(Person $person) 
    {
        $this->driver = $person;
        $this->occupants->push($person);
        return $this;
    }

    public function setPassengers(array $people)
    {
        
        $this->passengers = collect($people);
        $this->occupants->push($people);
        return $this;
    }


    public function listOccupants()
    {
        return $this->occupants->flatten()->sort()->map(fn($occupant) => $occupant->fullName());

    }


}


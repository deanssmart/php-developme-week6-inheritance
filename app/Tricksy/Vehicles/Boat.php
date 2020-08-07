<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Boat 
{
    private $driver;
    private $passengers;
    private $occupants;

    public function __construct()
    {
        $this->occupants = collect();
        $this->passengers = collect();
    }

    public function setDriver(Person $person) 
    {
        $this->driver = $person;
        $this->occupants->push($person);
        return $this;
    }

    public function setPassengers(array $people)
    {
        $this->passengers->push($people);
        $this->occupants->push($person);
        return $this;
    }

    public function listOccupants()
    {
        return $this->occupants->fullName()->sort()->all();

    }


}
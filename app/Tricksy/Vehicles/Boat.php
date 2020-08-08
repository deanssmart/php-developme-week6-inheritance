<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Boat 
{
    private $captain;
    private $passengers;
    private $occupants;

    public function __construct()
    {
        $this->occupants = collect();
    }

    public function setCaptain(Person $person) : Boat
    {
        $this->captain = $person;
        $this->occupants->push($person);
        return $this;
    }

    public function setPassengers(array $people) : Boat
    {        
        $this->passengers = collect($people);
        $this->occupants->push($people);
        return $this;
    }

    public function listOccupants() : array
    {
        return $this->occupants->flatten()->sort()->map(fn($occupant) => $occupant->fullName())->values()->all();
    }
}
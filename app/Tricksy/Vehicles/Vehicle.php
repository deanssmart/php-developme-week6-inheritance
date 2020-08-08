<?php

namespace App\Tricksy\Vehicles;
use App\Tricksy\Person;

abstract class Vehicle
{
    protected $passengers;
    protected $occupants;

    public function __construct()
    {
        $this->occupants = collect();
    }

    public function setPassengers(array $people) : Vehicle
    {        
        $this->passengers = collect($people);
        return $this;
    }

    public function listOccupants() : array
    {
        $this->setOccupants();
        return $this->occupants->map(fn($occupant) => $occupant->fullName())->sort()->values()->all();
     }

     
    abstract protected function setOccupants() : Vehicle;
}

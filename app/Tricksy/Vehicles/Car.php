<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Car extends Vehicle
{
    private $driver;
    private $occupants;

    public function __construct()
    {
        $this->occupants = collect();
    }

    public function setDriver(Person $person) : Car
    {
        $this->driver = collect([$person]);
        return $this;
    }

    private function setOccupants() : Car
    {
        $this->occupants = $this->passengers->merge($this->driver);
        return $this;
    }

    public function listOccupants() : array
    {
        $this->setOccupants();
        return $this->occupants->map(fn($occupant) => $occupant->fullName())->sort()->values()->all();
     }
}


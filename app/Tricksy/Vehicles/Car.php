<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Car extends Vehicle
{
    private $driver;

    public function setDriver(Person $person) : Car
    {
        $this->driver = collect([$person]);
        return $this;
    }

    protected function setOccupants() : Car
    {
        $this->occupants = $this->passengers->merge($this->driver);
        return $this;
    }
}


<?php

namespace App\Tricksy\Vehicles;
use App\Tricksy\Person;

abstract class Vehicle
{
    protected $passengers;

    public function setPassengers(array $people) : Vehicle
    {        
        $this->passengers = collect($people);
        return $this;
    }
}

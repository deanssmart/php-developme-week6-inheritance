<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Boat extends Vehicle 
{
    private $captain;

    public function setCaptain(Person $person) : Boat
    {
        $this->captain = collect([$person]);
        return $this;
    }

    protected function setOccupants() : Boat
    {
        $this->occupants = $this->passengers->merge($this->captain);
        return $this;
    }
}
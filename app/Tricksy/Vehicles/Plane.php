<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Plane extends Vehicle 
{
    private $pilot;
    private $coPilot;
    private $stewards;

    public function setPilot(Person $person) : Plane
    {
        $this->pilot = collect([$person]);
        return $this;
    }

    public function setCoPilot(Person $person) : Plane
    {
        $this->coPilot = collect([$person]);
        return $this;
    }

    public function setStewards(array $people) : Plane
    {        
        $this->stewards = collect($people);
        return $this;
    }

    protected function setOccupants() : Plane
    {
        $this->occupants = $this->passengers->merge($this->pilot)->merge($this->coPilot)->merge($this->stewards);
        return $this;
    }
}
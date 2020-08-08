<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Plane 
{
    private $pilot;
    private $coPilot;
    private $stewards;
    private $passengers;
    private $occupants;

    public function __construct()
    {
        $this->occupants = collect();
    }

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

    public function setPassengers(array $people) : Plane
    {        
        $this->passengers = collect($people);
        return $this;
    }

    private function setOccupants() : Plane
    {
        $this->occupants = $this->passengers->merge($this->pilot)->merge($this->coPilot)->merge($this->stewards);
        return $this;
    }

    public function listOccupants() : array
    {
        $this->setOccupants();
        return $this->occupants->map(fn($occupant) => $occupant->fullName())->sort()->values()->all();
    }
}
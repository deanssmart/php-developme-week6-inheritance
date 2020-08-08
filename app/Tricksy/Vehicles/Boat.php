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
        $this->captain = collect([$person]);
        return $this;
    }

    public function setPassengers(array $people) : Boat
    {        
        $this->passengers = collect($people);
        return $this;
    }

    private function setOccupants() : Boat
    {
        $this->occupants = $this->passengers->merge($this->captain);
        return $this;
    }

    public function listOccupants() : array
    {
        $this->setOccupants();
        return $this->occupants->map(fn($occupant) => $occupant->fullName())->sort()->values()->all();
    }
}
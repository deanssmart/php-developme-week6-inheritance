<?php

namespace App\Tricksy\Vehicles;
use Illuminate\Support\Collection;
use App\Tricksy\Person;

class Plane 
{
    private $pilot;
    private $copilot;
    private $stewards;
    private $passengers;
    private $occupants;

    public function __construct()
    {
        $this->occupants = collect();
    }

    public function setPilot(Person $person) : Plane
    {
        $this->pilot = $person;
        $this->occupants->push($person);
        return $this;
    }

    public function setCoPilot(Person $person) : Plane
    {
        if($this->copilot === null) {
            $this->copilot = $person;
            $this->occupants->push($person);
            return $this;
        } else {
            $this->$copilot = $this->occupants->reject(function ($occupant) {
                return $occupant === $this->copilot;
            });
            return $this;
        }

    }

    public function setStewards(array $people) : Plane
    {        
        $this->stewards = collect($people);
        $this->occupants->push($people);
        return $this;
    }

    public function setPassengers(array $people) : Plane
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
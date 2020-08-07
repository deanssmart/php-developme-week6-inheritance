<?php

// Create a Greeter class in the App\Greeter namespace. It should take a Language object on creation. It should also have a greet() method which takes a name and gives back a greeting in the appropriate language.

namespace App\Greeter;
use App\Languages\Language;

class Greeter 
{
    private $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function greet(string $name) : string
    {
        return "{$this->language->hello()} {$name}";
    }
}
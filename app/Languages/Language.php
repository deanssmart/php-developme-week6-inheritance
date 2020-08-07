<?php

// Create an abstract class Language in the App\Languages namespace. It should have a $name property and a name() method, which returns the language name. It should declare an abstract hello() method. Then create three child classes:

// English:
// name(): "English"
// hello(): "Hello"
// French:
// name(): "French"
// hello(): "Bonjour"
// Arabic:
// name(): "Arabic"
// hello(): "مرحبا"

namespace App\Languages;

abstract class Language
{
    protected $name;

    public function name() : string
    {
        return $this->name;
    }

    abstract public function hello() : string;
}
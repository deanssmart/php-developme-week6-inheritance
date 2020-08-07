<?php

namespace App\Languages;

class English extends Language
{
    public function __construct()
    {
        $this->name = "English";
    }

    public function hello() : string
    {
        return "Hello";
    }
}
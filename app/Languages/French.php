<?php

namespace App\Languages;

class French extends Language
{
    public function __construct()
    {
        $this->name = "French";
    }

    public function hello() : string
    {
        return "Bonjour";
    }
}
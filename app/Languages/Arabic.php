<?php

namespace App\Languages;

class Arabic extends Language
{
    public function __construct()
    {
        $this->name = "Arabic";
    }

    public function hello() : string
    {
        return "مرحبا";
    }
}
<?php

namespace App\Ex1;

class MultipleCondicional implements Condicional
{
    private int $number;

    public function __construct(int $number) 
    {
        $this->number = $number;
    }

    public function isValid(int $multiple): bool 
    {
        return $multiple % $this->number === 0;
    }
}
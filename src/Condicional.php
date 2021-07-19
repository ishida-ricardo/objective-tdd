<?php

namespace App;

interface Condicional
{
    public function isValid(int $number): bool;
}
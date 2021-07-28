<?php

namespace App\Ex1;

class OrCondicional implements Condicional
{
    private $itens;

    public function __construct($itens) 
    {
        $this->itens = $itens;
    }

    public function isValid(int $number): bool 
    {
        foreach ($this->itens as $key => $item) {
            if($item->isValid($number))
                return true;
        }
        return false;
    }
}
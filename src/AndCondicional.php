<?php

namespace App;

class AndCondicional implements Condicional
{
    private $itens;

    public function __construct($itens) 
    {
        $this->itens = $itens;
    }

    public function isValid(int $number): bool 
    {
        foreach ($this->itens as $key => $item) {
            if(!$item->isValid($number))
                return false;
        }
        return true;
    }
}
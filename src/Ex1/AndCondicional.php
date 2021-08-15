<?php

namespace App\Ex1;

class AndCondicional implements Condicional
{
    /** @var Condicional[] */
    private $itens;

    public function __construct(Condicional ...$itens)
    {
        $this->itens = $itens;
    }

    public function isValid(int $number): bool
    {
        foreach ($this->itens as $key => $item) {
            if (!$item->isValid($number)) {
                return false;
            }
        }

        return true;
    }
}

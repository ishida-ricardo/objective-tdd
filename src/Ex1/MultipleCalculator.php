<?php

namespace App\Ex1;

class MultipleCalculator
{
    private Condicional $condicional;

    public function __construct(Condicional $condicional)
    {
        $this->condicional = $condicional;
    }

    public function calculateSumInRange(int $range): int
    {
        $sum = 0;
        for ($i=1; $i <= $range; $i++) {
            if ($this->condicional->isValid($i)) {
                $sum += $i;
            }
        }

        return $sum;
    }
}

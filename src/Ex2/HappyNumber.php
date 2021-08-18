<?php

namespace App\Ex2;

class HappyNumber
{
    private $valores;

    public function __construct()
    {
        $this->valores = [];
    }

    private function calculateSquare(int $number): int
    {
        return pow($number, 2);
    }

    private function sumOfSquaresOfDigits(int $number): int
    {
        $numbers = str_split($number);

        $total = 0;
        foreach ($numbers as $key => $num) {
            $total = $this->calculateSquare($num) + $total;
        }

        return $total;
    }

    private function inLoop(int $number): bool
    {
        return in_array($number, $this->valores);
    }

    public function isHappyNumber(int $number): bool
    {
        $this->valores[] = $number;

        $result = $number;
        if (count($this->valores) == 1) {
            $result = $this->calculateSquare($number);
        }

        $total = $this->sumOfSquaresOfDigits($result);

        if ($this->inLoop($total)) {
            return false;
        }

        if ($total == 1) {
            return true;
        }

        return $this->isHappyNumber($total);
    }
}

<?php

namespace App\Tests\Ex1;

use App\Ex1\AndCondicional;
use App\Ex1\MultipleCalculator;
use App\Ex1\MultipleCondicional;
use App\Ex1\OrCondicional;
use PHPUnit\Framework\TestCase;

class CalculateMultipleTest extends TestCase
{
    public function testShouldCalculateSumNumbersMultiple3And5(): void
    {
        $andCondicional = new AndCondicional(new MultipleCondicional(3), new MultipleCondicional(5));

        $multiple = new MultipleCalculator($andCondicional);
        $this->assertEquals(15, $multiple->calculateSumInRange(20));
        $this->assertEquals(33165, $multiple->calculateSumInRange(1000));
    }

    public function testShouldCalculateSumNumbersMultiple3Or5(): void
    {
        $orCondicional = new OrCondicional(new MultipleCondicional(3), new MultipleCondicional(5));

        $multiple = new MultipleCalculator($orCondicional);
        $this->assertEquals(23, $multiple->calculateSumInRange(9));
        $this->assertEquals(234168, $multiple->calculateSumInRange(1000));
    }

    public function testShouldCalculateSumNumbersMultiple3Or5And7(): void
    {
        $orCondicional  = new OrCondicional(new MultipleCondicional(3), new MultipleCondicional(5));
        $andCondicional = new AndCondicional($orCondicional, new MultipleCondicional(7));

        $multiple = new MultipleCalculator($andCondicional);
        $this->assertEquals(21, $multiple->calculateSumInRange(21));
        $this->assertEquals(56, $multiple->calculateSumInRange(35));
    }
}

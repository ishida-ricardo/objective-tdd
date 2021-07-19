<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\MultipleCalculator;
use App\AndCondicional;
use App\OrCondicional;
use App\MultipleCondicional;

class CalculateMultipleTest extends TestCase
{
    public function testShouldCalculateSumNumbersMultiple3And5() 
    {
        $andCondicional = new AndCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);

        $multiple = new MultipleCalculator($andCondicional);
        $this->assertEquals(15, $multiple->calculateSumInRange(20));
        $this->assertEquals(33165, $multiple->calculateSumInRange(1000));
    }
    
    public function testShouldCalculateSumNumbersMultiple3Or5() 
    {
        $orCondicional = new OrCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);

        $multiple = new MultipleCalculator($orCondicional);
        $this->assertEquals(23, $multiple->calculateSumInRange(9));
        $this->assertEquals(234168, $multiple->calculateSumInRange(1000));
    }
    
    public function testShouldCalculateSumNumbersMultiple3Or5And7() 
    {
        $orCondicional = new OrCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);
        $andCondicional = new AndCondicional([$orCondicional, new MultipleCondicional(7)]);

        $multiple = new MultipleCalculator($andCondicional);
        $this->assertEquals(21, $multiple->calculateSumInRange(21));
        $this->assertEquals(56, $multiple->calculateSumInRange(35));
    }
}
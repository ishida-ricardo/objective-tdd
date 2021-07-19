<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\OrCondicional;
use App\MultipleCondicional;

class OrCondicionalTest extends TestCase
{
    public function testShouldCondicionalIsValid() 
    {
        $orCondicional = new OrCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);

        $this->assertTrue($orCondicional->isValid(3));
        $this->assertTrue($orCondicional->isValid(5));
        $this->assertTrue($orCondicional->isValid(9));
        $this->assertTrue($orCondicional->isValid(10));
        $this->assertTrue($orCondicional->isValid(15));
    }
    
    public function testShouldCondicionalIsInvalid() 
    {
        $orCondicional = new OrCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);

        $this->assertFalse($orCondicional->isValid(2));
        $this->assertFalse($orCondicional->isValid(7));
        $this->assertFalse($orCondicional->isValid(22));
    }
}
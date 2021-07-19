<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\AndCondicional;
use App\MultipleCondicional;

class AndCondicionalTest extends TestCase
{
    public function testShouldCondicionalIsValid() 
    {
        $andCondicional = new AndCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);

        $this->assertTrue($andCondicional->isValid(15));
        $this->assertTrue($andCondicional->isValid(30));
    }
    
    public function testShouldCondicionalIsInvalid() 
    {
        $andCondicional = new AndCondicional([new MultipleCondicional(3), new MultipleCondicional(5)]);

        $this->assertFalse($andCondicional->isValid(2));
        $this->assertFalse($andCondicional->isValid(6));
        $this->assertFalse($andCondicional->isValid(21));
    }
}
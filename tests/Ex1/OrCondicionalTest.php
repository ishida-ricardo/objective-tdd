<?php

namespace App\Tests\Ex1;

use App\Ex1\MultipleCondicional;
use App\Ex1\OrCondicional;
use PHPUnit\Framework\TestCase;

class OrCondicionalTest extends TestCase
{
    public function testShouldCondicionalIsValid()
    {
        $stubMultipleCondicional1 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional1->method('isValid')->willReturn(true);

        $stubMultipleCondicional2 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional2->method('isValid')->willReturn(true);

        $orCondicional = new OrCondicional([$stubMultipleCondicional1, $stubMultipleCondicional2]);

        $this->assertTrue($orCondicional->isValid(3));
        $this->assertTrue($orCondicional->isValid(5));
        $this->assertTrue($orCondicional->isValid(9));
        $this->assertTrue($orCondicional->isValid(10));
        $this->assertTrue($orCondicional->isValid(15));
    }

    public function testShouldCondicionalIsInvalid()
    {
        $stubMultipleCondicional1 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional1->method('isValid')->willReturn(false);

        $stubMultipleCondicional2 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional2->method('isValid')->willReturn(false);

        $orCondicional = new OrCondicional([$stubMultipleCondicional1, $stubMultipleCondicional2]);

        $this->assertFalse($orCondicional->isValid(2));
        $this->assertFalse($orCondicional->isValid(7));
        $this->assertFalse($orCondicional->isValid(22));
    }
}

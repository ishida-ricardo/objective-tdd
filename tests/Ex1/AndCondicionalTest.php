<?php

namespace App\Tests\Ex1;

use App\Ex1\AndCondicional;
use App\Ex1\MultipleCondicional;
use PHPUnit\Framework\TestCase;

class AndCondicionalTest extends TestCase
{
    public function testShouldCondicionalIsValid(): void
    {
        $stubMultipleCondicional1 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional1->method('isValid')->willReturn(true);

        $stubMultipleCondicional2 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional2->method('isValid')->willReturn(true);

        $andCondicional = new AndCondicional($stubMultipleCondicional1, $stubMultipleCondicional2);

        $this->assertTrue($andCondicional->isValid(15));
        $this->assertTrue($andCondicional->isValid(30));
        $this->assertTrue($andCondicional->isValid(45));
    }

    public function testShouldCondicionalIsInvalid(): void
    {
        $stubMultipleCondicional1 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional1->method('isValid')->willReturn(false);

        $stubMultipleCondicional2 = $this->createMock(MultipleCondicional::class);
        $stubMultipleCondicional2->method('isValid')->willReturn(false);

        $andCondicional = new AndCondicional($stubMultipleCondicional1, $stubMultipleCondicional2);

        $this->assertFalse($andCondicional->isValid(2));
        $this->assertFalse($andCondicional->isValid(6));
        $this->assertFalse($andCondicional->isValid(21));
    }
}

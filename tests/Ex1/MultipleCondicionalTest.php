<?php

namespace App\Tests\Ex1;

use App\Ex1\MultipleCondicional;
use PHPUnit\Framework\TestCase;

class MultipleCondicionalTest extends TestCase
{
    public function testShouldCondicionalIsValid(): void
    {
        $multipleCondicional = new MultipleCondicional(3);

        $this->assertTrue($multipleCondicional->isValid(3));
        $this->assertTrue($multipleCondicional->isValid(9));
        $this->assertTrue($multipleCondicional->isValid(15));
        $this->assertTrue($multipleCondicional->isValid(33));
    }

    public function testShouldCondicionalIsInvalid(): void
    {
        $multipleCondicional = new MultipleCondicional(3);

        $this->assertFalse($multipleCondicional->isValid(2));
        $this->assertFalse($multipleCondicional->isValid(7));
        $this->assertFalse($multipleCondicional->isValid(22));
    }
}

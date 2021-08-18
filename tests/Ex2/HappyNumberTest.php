<?php

namespace App\Tests\Ex2;

use App\Ex2\HappyNumber;
use PHPUnit\Framework\TestCase;

class HappyNumberTest extends TestCase
{
    public function testIfNumberIsHappyNumber(): void
    {
        $happyNumber = new HappyNumber();

        $this->assertTrue($happyNumber->isHappyNumber(7));
        $this->assertTrue($happyNumber->isHappyNumber(10));
        $this->assertTrue($happyNumber->isHappyNumber(68));
    }

    public function testIfNumberIsNotHappyNumber(): void
    {
        $happyNumber = new HappyNumber();

        $this->assertFalse($happyNumber->isHappyNumber(8));
        $this->assertFalse($happyNumber->isHappyNumber(15));
        $this->assertFalse($happyNumber->isHappyNumber(205));
    }
}

<?php

use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
    public function testMultiplicationTwoNumbers()
    {
        $this->assertEquals(4, 2 * 2);
    }
}
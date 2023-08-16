<?php

use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
    /** @test */
    public function MultiplicationTwoNumbers()
    {
        $this->assertEquals(4, 2 * 2);
    }

   
}
<?php

use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
    /** @test */
    public function MultiplicationTwoNumbers()
    {
        $this->assertEquals(4, 2 * 2);
    }
    /** @test */
    public function checkIfHasKey(): void
    {
        $userArray = [
            'name' => 'peter',
            'age' => 18,
        ];
        $this->assertArrayHasKey('age', $userArray);
    }
   
}
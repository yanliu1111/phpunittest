<?php

use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
    public function testMultiplicationTwoNumbers()
    {
        $output = false;
        if (1===1)
        {
            $output = true;
        }
        $this->assertTrue($output);
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
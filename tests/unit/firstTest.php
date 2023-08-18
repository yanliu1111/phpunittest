<?php

namespace Tests;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
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

public function testCheckIfNameKeyExists(): void
{
$userArray = [
'name' => 'peter',
'age' => 18,
];
$this->assertArrayHasKey('name', $userArray);
}

public function testCheckIfAgeKeyExists(): void
{
$userArray = [
'name' => 'peter',
'age' => 18,
];
$this->assertArrayHasKey('age', $userArray);
}
}

?>
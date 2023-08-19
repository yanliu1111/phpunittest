<?php

namespace Tests;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function checkInDataPrensent()
    {
       $collect = new \App\Support\Collection([
        14, 15, 16
    ]);
    var_dump($collect);
         $this->assertEmpty($collect->getData());
    }
}

?>
<?php

namespace Tests;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    public function testGetEmployeeName():void{
        $employee = new \App\Models\Employee;
        $employee->setName('Peter');
        $this->assertEquals($employee->getName(),'Peter');
    }
}

?>
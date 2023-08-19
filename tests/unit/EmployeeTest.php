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
    public function testGetEmployeeAge():void{
        $employee = new \App\Models\Employee;
        $employee->setAge(18);
        $this->assertEquals($employee->getAge(),18);
    }
    public function testGetEmployeeNameAndAge():void{
        $employee = new \App\Models\Employee;
        $employee->setNameAndAge('Peter',18);
        $this->assertEquals($employee->getNameAndAge(),['Peter',18]);
    }
}

?>
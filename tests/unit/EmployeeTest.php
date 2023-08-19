<?php

namespace Tests;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    protected $employee;
    public function setUp():void{
        $this -> employee = new \App\Models\Employee;

    }
    public function testGetEmployeeName():void{
        $this -> employee->setName('Peter');
        $this->assertEquals($this -> employee->getName(),'Peter');
    }
    public function testGetEmployeeAge():void{
        $this -> employee->setAge(18);
        $this->assertEquals($this -> employee->getAge(),18);
    }
    public function testGetEmployeeNameAndAge():void{
        $this -> employee->setNameAndAge('Peter',18);
        $this->assertEquals($this -> employee->getNameAndAge(),['Peter',18]);
        $this -> assertArrayHasKey (1, $this -> employee->getNameAndAge());
    }

}

?>
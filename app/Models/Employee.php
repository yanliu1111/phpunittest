<?php
namespace App\Models;
    class Employee{
        // I want to access it from the test. Protected is accessible from the class and its subclasses. Private is only accessible from the class.
        protected $employee;
        protected $age;
        protected $employeeAge;
        public function setName($name){
            $this->employee = $name;
        }
        public function getName(){
            return $this->employee;
        }

        public function setAge($age){
            $this->employee = $age;
        }

        public function getAge(){
            return $this->employee;
        }
        public function setNameAndAge($name,$age){
            $this->employee = $name;
            $this->employeeAge = $age;
        }
        public function getNameAndAge(){
            return [$this->employee,$this->employeeAge];
        }
    }
?>
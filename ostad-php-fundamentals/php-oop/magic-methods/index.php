<?php
class Student
{
    private $name;
    private $age;
    private $class;

    public function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = strtoupper($value);
    }

    // function getName()
    // {
    //     return $this->name;
    // }

    // function setName($name)
    // {
    //     $this->name = $name;
    // }

    // function getAge()
    // {
    //     return $this->age;
    // }

    // function setAge($age)
    // {
    //     $this->age = $age;
    // }

    // function getClass()
    // {
    //     return $this->class;
    // }

    // function setClass($class)
    // {
    //     $this->class = $class;
    // }
}

// $student = new Student('John', 20, 'A');

// echo $student->name . PHP_EOL;
// echo $student->age . PHP_EOL;
// echo $student->class . PHP_EOL;

$student = new Student();
$student->name = 'Chandan';
$student->age = 20;
$student->class = 'A';

echo $student->name . PHP_EOL;
echo $student->age . PHP_EOL;
echo $student->class . PHP_EOL;

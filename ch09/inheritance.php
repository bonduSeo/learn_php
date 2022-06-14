<?php
class People
{
    protected $name;
    protected $age;

    function printPeople()
    {
        print "Name : {$this->name}<br>";
        print "Age : {$this->age}<br>";
    }
}
//protected 이기때문에 상속관계에서 사용가능함
class Student extends People
{
    private $studentId;

    function __construct($name, $age, $id)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $id;
    }

    function printStudent()
    {
        print "- Student - <br>";
        $this->printPeople();
        print "Id : {$this->studentId}<br>";
    }
}

$stu1 = new Student("홍길동", 21, 1010);
$stu1->printPeople();
print "------<br>";
$stu1->printStudent();
print("<hr>");

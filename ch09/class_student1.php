<?php
// Access Modifier 접근제어지시자(public private protected)
class Student
{
    public $studentId;
    public $studentName;

    public function printStudent()
    {
        print "ID : {$this->studentId}<br>";
        print "Name : {$this->studentName}<br>";
    }
}

$obj = new Student;
$obj->studentId = 20171212;
$obj->studentName = "Alice";

$obj->printStudent();

foreach ($obj as $k => $v) {
    print $k . " : " . $v . "<br>";
}

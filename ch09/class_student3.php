<?php

class Student
{
    private $studentId;
    private $studentName;

    public function printStudent()
    {
        print "ID : {$this->studentId}<br>";
        print "Name : {$this->studentName}<br>";
    }
    //getters
    public function getStudentId()
    {
        return $this->studentId;
    }
    public function getStudentName()
    {
        return $this->studentName;
    }
    //setter
    public function setStudentId($id)
    {
        $this->studentId = $id;
    }
    public function setStudentName($name)
    {
        $this->studentName = $name;
    }
}

$obj = new Student;
// $obj->studentId = 20171212;
// $obj->studentName = "Alice";
$obj->setStudentId(20071234);
$obj->setStudentName("ABC");

$obj->printStudent();
print $obj->getStudentId() . "<br>";
print $obj->getStudentName() . "<br>";

print_r($obj);


//멤버필드 직접바꾸면 메모리스택에 쌓이지않고((여러명이 같은 객체를 사용할때) 갑자기 값변경되어 문제가 생길수있다)
//메소드를 통해 바꿔야만 메모리스택에 쌓여서 순서가 쌓여서 순서대로 처리되어서.
// 그리고 셋터로 변수내용을 설정할때 분기를 체크해서 들어가면안되는값을 걸러낼수있다.
//은닉화하고 겟터겟터 만드는것은 진리임
//상수는 퍼블릭해도 무방
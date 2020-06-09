<?php
class Person{
    public function show(){
        echo '我是人';
    }
}

class Student extends Person{
    public function test(){
        // 方法一
        // $person=new Person;
        // $person ->show();
        // 方法二
        // parent::show();
        // 方法三
        $this->show();
    }
}

$stu =new Student;
$stu ->test();

class A{
    public function num(){
        echo $this->num;
    }
}
class B extends A{
    protected $num=10;
}

$b=new B;
$b->num();
// protected 受保护的类，可在类的内部和子类中访问(只能在整个继承链上访问)


<?php

class Student{
    private $name;
    private $sex;

    public function test($name,$sex){
            $this -> name=$name; //$this表示当前对象
            $this -> sex=$sex;
    }
    public function ceshi($name,$sex){
        echo '姓名：'.$this->name=$name.'<br>';
        echo '性别:'.$this->sex=$sex;

    }
}

$stu=new Student;
$stu ->ceshi('tom','男');

// 小结‘
/*
访问修饰符 public 公有的，private 私有的 protected 受保护的
小妙招：一般来说，属性都是私有的，通过公共方法，给私有属性赋值
$this 表示当前类的对象 
*/
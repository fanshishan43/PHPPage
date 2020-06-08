<?php
// clone和__clone 克隆
class Student{
    // 执行克隆指令的时候 自动执行
    public function __clone(){
        echo '我是克隆<br>';
    }

}



$stu1=new Student;
$stu2 =clone $stu1; //克隆指令 克隆对象
var_dump($stu1,$stu2);


//1. 克隆是创建对象的方法之一，
// 2.当执行克隆对象的时候 会自动调用__clone()方法
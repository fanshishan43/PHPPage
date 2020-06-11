<?php
// clone和 __clone() 克隆
class Student{
    function __clone(){
        echo '我是克隆哦';
    }
}

$stu=new Student;
$stu1=clone $stu;
// var_dump($stu,$stu1);

// clone是克隆一个对象，
// 是创建对象的方法之一
// 2.当克隆对象时, __clone()方法会自动调用 
// 3.实现__clone()方法，需配合clone使用


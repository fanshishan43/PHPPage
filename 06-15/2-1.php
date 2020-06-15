<?php
// =策略模式
// 用不同的参数，调用不同方法
class walk{
    function way(){
        echo 1111;
    }
}

class Bus{
    function way(){
        echo '22222';
    }
}

class Student{
    function play($obj){
        $obj ->way();
    }
}

$stu=new Student;
$stu ->play(new walk()); //1111
$stu -> play(new Bus()); //2222
<?php
// 策略模式
class walk{
    function way(){
        echo '我是1';
    }
}

class Bus{
    function way(){
        echo '我是2';
    }
}

class Student{
    function play($obj){
        $obj ->way();
    }
}

$stu=new Student;
$stu ->play(new walk());
$stu ->play(new Bus());
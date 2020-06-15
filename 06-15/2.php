<?php
// 策略模式

// 传递不同的参数调用不同的方法
class walk{
    public function way(){
        echo '哈哈哈';
    }

}

class Bus{
    public function way(){
        echo '吃你是';
    }
}

// 策略模式
class Student{
    public function play($obj){
        $obj ->way();
    }
}

$stu =new Student;
$stu ->play(new walk()); //哈哈哈
$stu ->play(new bus()); //吃你是
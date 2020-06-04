<?php
// 析构函数
// 代码结束时自动调用，不可带参数
class Student{
    private $name;
   public function __construct($name){
        $this->name=$name;
        echo $this->name.'出生了';
    }
    // 析构方法 __destruct
    public function __destruct(){
        echo "{$this->name}销毁了";
    }
}
/*
$stu=new Student('tom');
$stu1=new Student('tom1');
$stu2=new Student('tom2');
unset($stu1);
*/
/*
tom出生了
tom1出生了
tom2出生了
tom2销毁了
tom1销毁了
tom销毁了
 */
/* 触发；垃圾回收机制,没有对象去引用他 所以new出来就直接跟着销毁了 
new Student('tom')
new Student('tom1')
new Student('tom2')
tom出生了
tom销毁了
tom1出生了
tom1销毁了
tom2出生了
tom2销毁了
*/
 /*
 计算机分：先进先出，先进后出
 计算机默认内存管理 先进后出
 在一些逻辑处理中，例如秒杀、购票是先进先出
 
 */
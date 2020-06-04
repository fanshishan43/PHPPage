<?php
/*
在堆区实例化对象  栈区存储对象的地址

 */

 class Student{
     private $Name;
     private $sex;
     public function __construct($Name,$sex){
        //  对象被实例化之后 自动调用的方法
        // 作用初始化成员属性
        // 构造函数里不能return
        // echo '这是构造方法';
        $this ->name=$Name;
        $this -> sex=$sex;
     }
     public function show(){
         echo "姓名：".$this->name;
         echo '性别:'.$this -> sex;
     }
 }
$stu=new Student(tom,'男');
$stu -> show();


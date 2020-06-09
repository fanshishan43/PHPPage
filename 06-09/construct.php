<?php
class Student{
    public $name="lisi";
    public $sex="nan";
    public function __construct($name,$sex){
        $this->name=$name;
        $this->sex=$sex;

    }
    public function show(){
            echo $this->name;
            echo $this->sex;
    }
}
$stu=new Student(tom,12);
$stu->show();

/*__construct()
对象被实例化之后，自动调用的方法
作用初始化成员变量
构造方法里不能return

*/
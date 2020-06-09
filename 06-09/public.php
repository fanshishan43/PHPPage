<?php
class Student{
    private $name;
    private $sex; //私有方法
    public function tets($name,$sex){
        $this ->name=$name;
        $this ->sex=$name; //$this表示当前对象
    }

    public function ceshi($name,$sex){
        echo "姓名:". $this->name=$name;
        echo "年龄".$this->sex=$sex;
    }
}
$stu=new Student;
$stu->ceshi('tom','男');

/*
小结：访问修饰符public公有的 private私有的，protected受保护的
小妙招:一般来说，属性都是私有的，通过公有方法给私有方法赋值
$this 表示当前类的对象

*/
<?php
// abstract 抽象类
abstract class Person{
    protected abstract function test(); //抽象方法，没有方法体，需要被继承重写

    public function show(){

    }
}

class Student extends Person{
    public function test(){
        echo '实现抽象方法，并写成私有方法'; //方法或类被继承时，方法和成员的类型要比父级的类型低(private protected public )
    }

    public function text(){
       self::test();
    }
}

$stu =new Student;
$stu ->text();
// abstract 抽象类
// 注意:子类继承抽象类，那么一定要实现抽象类中的抽象方法
// 抽象方法一定不能是私有方法，不能把他私有化。    

// 作用:
// 1.定义命名规范,抽象类中的抽象方法被继承后一定要实现(定义模块规则)
// 2.阻止类被实例化，如果一个类中的成员都是静态的，这时候就没有必要实例化，可以将其写成抽象类，让子类去继承实现，减少资源占用

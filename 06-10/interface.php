<?php
// interface 接口类

interface  Person {
    const Name="1";
    public function test();
    public function show();
    public function ceshi ();

}

class Student implements Person{
    public function test(){
        echo Name;
    }

    public function show(){

    }

    public function ceshi (){

    }
}

$stu =new Student;
$stu -> test();

// 1. 如果一个类的所有方法都是抽象方法，那么可以将它写成接口类 interface
// 2.接口类是特殊的抽象类,接口中只能有抽象方法和常量(const)
// 3.接口类中的从抽象方法只能是公共的(public) 可以省略，默认也是public
// 4.通过implements 关键字来实现接口类
// 5.不能使用abstract和final来修饰接口类中的方法


// 1.如果一个类的所有方法都是抽象方法，那么可以写成接口类
// 2.接口类是特殊的抽象类，接口中只能有抽象方法和常量
// 3.接口类中的抽象方法只能是公共的(public) 可以省略， 默认就是public
// 4.通过关键字implements来实现接口类
// 5.不能使用abstract和final来修饰接口类中的方法(接口类中的方法默认就是abstract，final修饰的话，接口类中的方法将无法实现)
